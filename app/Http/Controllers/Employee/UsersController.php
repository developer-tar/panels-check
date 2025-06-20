<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use App\Http\Requests\Profile\CreditScoreRequest;
use App\Http\Requests\Profile\IdentityVerifyRequest;
use App\ImageUploadTrait;
use App\Models\Media;
use App\Models\User;
use App\Services\CompanyService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    use ImageUploadTrait;

    private $name = 'employee';
    protected $companyService;
    public function __construct(CompanyService $companyService)
    {
        $this->companyService = $companyService;
    }
    public function index()
    {
        return view($this->name . '.users.index');
    }

    public function create()
    {
        return view($this->name . '.users.create');
    }

    public function edit($id)
    {
        return view($this->name . '.users.edit');
    }
    public function profile()
    {
        $companyId = null;
        $companyDetails = null;
        if (Auth::guard(name: 'employee')->check()) {
            $details = User::with('company')->where('id', Auth::guard('employee')->user()->id)->first();
            if ($details->company?->id) {
                $companyId = $details->company->id;
                $companyDetails = $details->company;
            }
        }

        $companies = $this->companyService->getCompanies();

        return view($this->name . '.profile', compact('companies', 'companyId', 'companyDetails'));
    }
    public function creditScore(CreditScoreRequest $request)
    {
        try {

            $salary = (float) ($request->input('current_salary_per_annum') ?? 0);
            $personalLoan = (float) ($request->input('personal_loan') ?? 0);
            $autoLoan = (float) ($request->input('auto_loan') ?? 0);
            $creditCard = (float) ($request->input('credit_card') ?? 0);
            $overdraft = (float) ($request->input('overdraft') ?? 0);
            $educationLoan = (float) ($request->input('educational_loan') ?? 0);

            // Sum of all loans (Total EAD)
            $totalEAD = $personalLoan + $autoLoan + $creditCard + $overdraft + $educationLoan;

            // DBR Calculation
            $dbr = $salary > 0 ? round(($totalEAD / $salary) * 100, 2) . '%' : 0;

            // Credit Limit (assume 5x salary)
            $creditLimit = $salary * 5;

            // Available Limit
            $availableLimit = $creditLimit - $totalEAD;
            $data = $request->except('_token');
            $data['total_ead'] = $totalEAD;
            $data['dbr_calculation'] = $dbr;
            $data['credit_limit'] = $creditLimit;
            $data['avaiable_limit'] = $availableLimit;

            User::where('id', Auth::guard('employee')->user()->id)->update($data);

            return back()->with('success', config('constants.user_credit_score_message'));
        } catch (\Exception $e) {
            DB::rollBack();
            \Log::info('error_message company create', ['message' => $e->getMessage()]);
            return redirect()->back()->with('error', config('constants.wrong_message'));
        }
    }
    public function identityVerify(IdentityVerifyRequest $request)
    {
        try {
            $user = User::find(Auth::guard('employee')->user()->id);
            
            // Handle file upload
            if ($request->hasFile('identity_file') && $user) {
                $file = $request->file('identity_file');
                $extension = $file->getClientOriginalExtension();
                   
                $imagePath = $this->storeImage($file, 'identity_verify');
                $storagePath = 'storage/' . $imagePath;

                Media::updateOrCreate(
                    [
                        'model_name' => User::class,
                        'model_id' => $user->id,
                        'folder_name' => 'identity_verify',
                    ],
                    [
                        'path' => $storagePath,
                        'type' => getFileType($extension),
                        'folder_name' => 'identity_verify',
                    ]
                );
            }
            $user->update(
                [
                    'doc_type' => $request->input('identity_type'),
                    'doc_number' => $request->input('identity_number')
                ]
            );

            return back()->with('success', config('constants.kyc_verify_message'));
        } catch (\Exception $e) {
            DB::rollBack();
            \Log::info('error_message company create', ['message' => $e->getMessage()]);
            return redirect()->back()->with('error', config('constants.wrong_message'));
        }
    }
}
