<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Http\Requests\UserStoreRequest;
use App\ImageUploadTrait;
use App\Models\Media;
use App\Models\User;
use App\Services\CompanyService;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller {

    use ImageUploadTrait;
    private $name = 'admin';
    protected $companyService;
    public function __construct(CompanyService $companyService) {
        $this->companyService = $companyService;
    }
    public function index() {
 
        $users = User::with(['media:id,model_id,path', 'company:id,company_name', 'roles:id,name'])
            ->where('id', '!=', Auth::guard('admin')->id())
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
                    'role' => $user->roles->first()?->name,
                    'kyc_status' => ucfirst($kycStatus),
                ];
            });

        return view($this->name . '.users.index')->with('users', $users);
    }

    public function create() {
        $companies = $this->companyService->getCompanies();

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
                $file = $request->file('path');
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
            if ($user && $request->filled('role_id')) {
                $user->roles()->attach($request->role_id, [
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }

            DB::commit();

            return redirect()->route($this->name . '.user.index')->with('success', 'HR created successfully.');
        } catch (\Exception $e) {
            DB::rollBack();
            
            return redirect()->back()->with('error', 'Something went wrong');
        }
    }
    public function kycPendingRequest() {
        $users = User::with(['media:id,model_id,path', 'company:id,company_name', 'roles:id,name'])
            ->whereNot('id', Auth::guard('admin')->id())->where(['kyc_status' => config('constants.user_approval_status.pending')])
            ->whereHas('roles', function($q){
                $q->where('name',config('constants.roles_inverse.employee'));
            })
            ->whereHas('media', function($q){
                $q->where('folder_name','identity_verify');
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
                    'identity_document' => $user->media->first()?->path,
                    'kyc_status' => ucfirst($kycStatus),
                ];
            });
        
        return view($this->name . '.users.kycPendingRequest')->with('users', $users);
    }

    public function approve(User $user) {
        $user->kyc_status = config('constants.user_approval_status.approved'); // Or just 'approved'
        $user->save();

        return back()->with('success', config('constants.warning_messge.kyc.approval'));
    }

    public function reject(User $user) {
        $user->kyc_status = config('constants.user_approval_status.rejected'); // Or just 'rejected'
        $user->save();

        return back()->with('success', config('constants.warning_messge.kyc.rejected'));
    }
 
    public function pendingRequest() {
        $users = User::with(['media:id,model_id,path', 'company:id,company_name', 'roles:id,name'])

            ->whereNot('id', Auth::guard('admin')->id())->where(['status' => config('constants.user_approval_status.pending')])
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
                    'media' => $user->media->first()?->path,
                    'role' => $user->roles->first()?->name,
                    'kyc_status' => ucfirst($kycStatus),
                ];
            });
            

        return view($this->name . '.users.PendingRequest')->with('users', $users);
    }

    public function approveStatus(User $user) {
        $user->status = config('constants.user_approval_status.approved'); // Or just 'approved'
        $user->save();

        return back()->with('success', config('constants.warning_messge.status.approval'));
    }

    public function rejectStatus(User $user) {
        $user->status = config('constants.user_approval_status.rejected'); // Or just 'rejected'
        $user->save();

        return back()->with('success', config('constants.warning_messge.status.rejected'));
    }
}
