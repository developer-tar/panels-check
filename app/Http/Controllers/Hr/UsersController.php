<?php

namespace App\Http\Controllers\Hr;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserStoreRequest;
use App\ImageUploadTrait;
use App\Models\Media;
use App\Models\User;
use App\Services\CompanyService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use PDO;

class UsersController extends Controller {
    use ImageUploadTrait;
    private $name = 'hr';
    protected $companyService;
    public function __construct(CompanyService $companyService) {
        $this->companyService = $companyService;
    }
    public function index() {

        $users = User::with(['media:id,model_id,path', 'company:id,company_name', 'roles:id,name'])
            ->whereNot('id', Auth::guard('hr')->id())->where('company_id', '=', Auth::guard('hr')->user()->company_id)
            ->whereHas('roles', function ($query) {
                $query->where('name', config('constants.roles_inverse.employee'));
            })
            ->paginate(10)
            ->through(function ($user) {
                // Experience formatting
                $expYears = $user->experience_in_years ?? 0;
                $expMonths = $user->experience_in_month ?? 0;
                $exp = null;
                if ($expYears || $expMonths) {
                    $exp = trim(($expYears ? "$expYears yr" : '') . ($expMonths ? " $expMonths mo" : ''));
                }

                // Country name from ID
                $countryName = isset($user->country_id)
                    ? array_search($user->country_id, config('constants.country'))
                    : null;

                // Status label from status ID
                $status = isset($user->status)
                    ? array_search($user->status, config('constants.user_approval_status'))
                    : null;

                $kycStatus = isset($user->kyc_status)
                    ? array_search($user->kyc_status, config('constants.user_approval_status'))
                    : null;
                return [
                    'id' => $user->id,
                    'company_name' => $user->company?->company_name,
                    'name' => $user->first_name . ' ' . $user->last_name,
                    'email' => $user->email,
                    'age' => $user->age ?? null,
                    'salary' => $user && isset($user->current_salary_per_annum) ? $user->current_salary_per_annum . '$' : null,
                    'exp' => $exp,
                    'country' => $countryName,
                    'user_status' => ucfirst($status),
                    'media' => $user->media->first()?->path,
                    'kyc_status' => ucfirst($kycStatus),
                ];
            });
        return view($this->name . '.users.index')->with('users', $users);
    }

    public function create() {
        $companies = $this->companyService->getCompanies('hr');

        return view($this->name . '.users.create')->with('companies', $companies);
    }


    public function edit($id) {
        return view($this->name . '.users.edit');
    }
    public function store(UserStoreRequest $request) {
        try {
            DB::beginTransaction();

            // Create company and get the instance
            $user = User::create($request->except('path', '_token'));

            // Handle file upload
            if ($request->hasFile('path')) {
                $file = $request->file(key: 'path');
                $extension = $file->getClientOriginalExtension();
                $imagePath = $this->storeImage($file, 'personal_profile');
                $storagePath = 'storage/' . $imagePath;

                Media::create([
                    'model_name' => User::class,
                    'model_id' => $user->id,
                    'path' => $storagePath,
                    'folder_name' => 'personal_profile',
                    'type' => getFileType($extension),
                ]);
            }
            if ($user) {
                $user->roles()->attach(config('constants.roles.EMPLOYEE'), ['created_at' => now(), 'updated_at' => now()]);
            }

            DB::commit();

            return redirect()->route($this->name . '.user.index')->with('success', 'User created successfully.');
        } catch (\Exception $e) {
            DB::rollBack();
         
            return redirect()->back()->with('error', 'Something went wrong');
        }
    }
    public function pendingRequest() {
        $approvalStatus = true;
        
        $user = User::where('id', Auth::guard('hr')->user()->id)
            ->whereIn('status', [config('constants.user_approval_status.pending'), config('constants.user_approval_status.rejected')])
            ->first();
            
        if($user){
            
            $approvalStatus = false;
        }
     
        $users = User::with(['media:id,model_id,path', 'company:id,company_name', 'roles:id,name'])

            ->where(['status' => config('constants.user_approval_status.pending'), 'company_id' => Auth::guard('hr')->user()->company_id])
            ->whereNotNull('company_id')
            ->whereHas('roles', function ($query) {
                $query->where('name', config('constants.roles_inverse.employee'));
            })
            ->paginate(10)
            ->through(function ($user) {
                // Experience formatting
                $expYears = $user->experience_in_years ?? 0;
                $expMonths = $user->experience_in_month ?? 0;
                $exp = null;
                if ($expYears || $expMonths) {
                    $exp = trim(($expYears ? "$expYears yr" : '') . ($expMonths ? " $expMonths mo" : ''));
                }

                // Country name from ID
                $countryName = isset($user->country_id)
                    ? array_search($user->country_id, config('constants.country'))
                    : null;

                // Status label from status ID
                $status = isset($user->status)
                    ? array_search($user->status, config('constants.user_approval_status'))
                    : null;
                $kycStatus = isset($user->kyc_status)
                    ? array_search($user->kyc_status, config('constants.user_approval_status'))
                    : null;
                return [
                    'id' => $user->id,
                    'company_name' => $user->company?->company_name,
                    'name' => $user->first_name . ' ' . $user->last_name,
                    'email' => $user->email,
                    'age' => $user->age ?? null,
                    'salary' => $user && isset($user->current_salary_per_annum) ? $user->current_salary_per_annum . '$' : null,
                    'exp' => $exp,
                    'country' => $countryName,
                    'user_status' => ucfirst($status),
                    'media' => $user->media->first()?->path,
                    'role' => $user->roles->first()?->name,
                    'kyc_status' => ucfirst($kycStatus),
                ];
            });

        return view($this->name . '.users.pendingRequest',compact('users','approvalStatus'));
    }

    public function approve(User $user) {
        $user->status = config('constants.user_approval_status.approved'); // Or just 'approved'
        $user->save();

        return back()->with('success', config('constants.warning_messge.status.approval'));
    }

    public function reject(User $user) {
        
        $user->status = config('constants.user_approval_status.rejected'); // Or just 'rejected'
        $user->save();

        return back()->with('success', config('constants.warning_messge.status.rejected'));
    }

    public function profile() {
        $companyId = null;
        $companyDetails = null;
        if (Auth::guard('hr')->check()) {
            $details = User::with('company')->where('id', Auth::guard('hr')->user()->id)->first();
            if ($details->company?->id) {
                $companyId = $details->company->id;
                $companyDetails = $details->company;
            }
        }

        $companies = $this->companyService->getCompanies();
       
        return view('hr.profile', compact('companies', 'companyId', 'companyDetails'));
    }
}
