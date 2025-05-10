<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use App\Http\Requests\ClaimRequest;
use App\ImageUploadTrait;
use App\Models\Benefit;
use App\Models\Claim;
use App\Models\Company;
use App\Models\Media;
use App\Services\CompanyService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class BenefitsEnrollController extends Controller
{
    use ImageUploadTrait;


    protected $name = 'employee';
    protected $companyService;
    public function __construct(CompanyService $companyService)
    {
        $this->companyService = $companyService;
    }

    public function index()
    {

        dd(Claim::with(['media:id,name'])->where('user_id', Auth::guard('employee')->user()->id)->get());
        return view($this->name . '.benefits.index');
    }

    public function create()
    {

        $companies = Company::with([
            'domain:id,name'
        ])->where('status', config('constants.status.active'))->get();

        $companies = $companies->filter(function ($company) {
            return $company->domain?->name;
        })->map(function ($company) {
            $domainName = "({$company->domain->name})";
            return [
                'company_id' => $company->id,
                'domain_id' => $company?->domain?->id,
                'name' => $company->company_name . ' ' . $domainName,
            ];
        });


        return view($this->name . '.benefits.create')->with('companies', $companies);
    }

    public function edit($id)
    {
        return view($this->name . '.benefits.edit');
    }
    public function store(ClaimRequest $request)
    {
        try {
            DB::beginTransaction();
            if ($request->filled('company_id')) {
                [$companyId, $domainId] = explode('-', $request->company_id);
            }
            $data = $request->except('_token','claim_file');
            $data['user_id'] = Auth::guard('employee')->user()->id;
            $data['company_id'] = $companyId ?? null;
            $data['domain_id'] = $domainId ?? null;

            $claim = Claim::create($data);
        
              
            if ($request->hasFile('claim_file') && $claim) {
                $file = $request->file('claim_file');
                $extension = $file->getClientOriginalExtension();

                $imagePath = $this->storeImage($file, 'claim_verify');
                $storagePath = 'storage/' . $imagePath;
                
                $media = Media::updateOrCreate(
                    [
                        'model_name' => Claim::class,
                        'model_id' => $claim->id,
                        'folder_name' => 'claim_verify',
                    ],
                    [
                        'path' => $storagePath,
                        'type' => getFileType($extension),
                        'folder_name' => 'claim_verify',
                    ]
                );
            }
            DB::commit();
            return redirect()->route($this->name . '.benefit.index')->with('success', 'Claim has been successfully submited.');
        } catch (\Exception $e) {
            DB::rollBack();
            \Log::info('error_message company create', ['message' => $e->getMessage()]);
            return redirect()->back()->with('error', config('constants.wrong_message'));
        }
    }
}
