<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use App\Http\Requests\ClaimRequest;
use App\ImageUploadTrait;
use App\Models\Benefit;
use App\Models\Claim;
use App\Models\Company;
use App\Models\Domain;
use App\Models\Media;
use App\Services\CompanyService;
use Carbon\Carbon;
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

        $showCaseDetails = Benefit::with('domain:id,name', 'domain.company:id,company_name,email,domain_id', 'domain.claim:id,domain_id')
            ->whereHas('domain.claim', function ($q) {
                return $q->whereNot('user_id', auth()->guard('employee')->id());
            })
            ->whereNot('user_id', Auth::guard('vendor')->id())
            ->select('domain_id', 'company_id', 'coverage_limit', 'start_period', 'end_period')
            ->get();
        if ($showCaseDetails->isNotEmpty()) {
            $showCaseDetails = $showCaseDetails->map(function ($show) {
                $domain = optional($show->domain);
                $company = optional($domain->company->first());

                return [
                    'domain_name' => $domain->name,
                    'company_name' => $company->company_name,
                    'company_email' => $company->email,
                    'coverage_rate' => $show->coverage_limit,
                    'start_period' => $show->start_period,
                    'end_period' => $show->end_period,
                ];
            });

        }
        $claims = Claim::with(['media:id,model_id,path', 'company:id,company_name', 'domain:id,name'])
            ->where('user_id', Auth::guard('employee')->user()->id)
            ->paginate(10)
            ->through(function ($claim) {
                $benefit = Benefit::select('coverage_limit', 'start_period', 'end_period')->where(['domain_id' => $claim?->domain?->id, 'company_id' => $claim?->company?->id])->first();
                $status = null;
                if ($claim?->status == config('constants.user_approval_status.pending')) {
                    $status = 'submission';
                }
                if ($claim?->status == config('constants.user_approval_status.approved')) {
                    $status = 'Approved';
                }
                if ($claim?->status == config('constants.user_approval_status.rejected')) {
                    $status = 'Rejected';
                }
                return [
                    'path' => $claim?->media?->path,
                    'company_name' => $claim?->company?->company_name,
                    'domain_name' => $claim?->domain?->name,
                    'claim_amount' => $claim?->claim_amount_required,
                    'company_claim_amount' => $benefit?->coverage_limit,
                    'start_period' => $benefit?->start_period,
                    'end_period' => $benefit?->end_period,
                    'enrolled_at' => $claim?->created_at ? Carbon::parse($claim?->created_at)->diffForHumans() : null,
                    'status' => $status,
                ];
            });
        return view($this->name . '.benefits.index', compact('claims', 'showCaseDetails'));
    }

    public function create()
    {

        $companies = Benefit::with(['company:id,company_name', 'domain:id,name'])->get();

        $companies = $companies->filter(function ($claim) {
            return $claim->domain?->name;
        })->map(function ($claim) {
            $domainName = "({$claim->domain->name})";
            return [
                'company_id' => $claim->company_id,
                'domain_id' => $claim?->domain_id,
                'name' => $claim?->company?->company_name . ' ' . $domainName,
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
            $data = $request->except('_token', 'claim_file');
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
