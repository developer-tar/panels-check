<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CompanyStoreRequest;
use App\ImageUploadTrait;
use App\Models\Company;
use App\Models\Domain;
use App\Models\Media;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Services\CompanyService;
use App\Http\Requests\CompanyCreateRequest;

class CompanyController extends Controller
{
    use ImageUploadTrait;
    protected $companyService;
    public function __construct(CompanyService $companyService)
    {
        $this->companyService = $companyService;
    }

    public function index()
    {
        $companies = $this->companyService->getCompaniesWithMedia();
        
        return view('admin.company.index')->with('companies', $companies);
    }

    public function create()
    {

        $domains = Domain::where('status', config('constants.status.active'))->get();

        return view('admin.company.create')->with('domains', $domains);
    }

    public function edit($id)
    {
        return view('admin.company.edit');
    }

    public function store(CompanyStoreRequest $request)
    {
        try {
            DB::beginTransaction();

            // Create company and get the instance
            $company = Company::create($request->except('path', '_token'));

            // Handle file upload
            if ($request->hasFile('path')) {
                $imagePath = $this->storeImage($request->file('path'), 'companies');
                $storagePath = 'storage/' . $imagePath;

                Media::create([
                    'model_name' => Company::class,
                    'model_id' => $company->id,
                    'path' => $storagePath,
                    'type' => config('constants.path.image'),
                ]);
            }

            DB::commit();

            return to_route('admin.company.index')->with('success', 'Company created successfully');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', 'Something went wrong');
        }

    }
}
