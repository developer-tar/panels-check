<?php

namespace App\Http\Controllers\Hr;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserStoreRequest;
use App\ImageUploadTrait;
use App\Models\Media;
use App\Models\User;
use App\Services\CompanyService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    use ImageUploadTrait;
    private $name = 'hr';
    protected $companyService;
    public function __construct(CompanyService $companyService)
    {
        $this->companyService = $companyService;
    }
    public function index()
    {
        $users = User::with(['media:id,model_id,path', 'company:id,company_name', 'roles:id,name'])
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

                return [
                    'id' => $user->id,
                    'company_name' => $user->company?->company_name,
                    'name' => $user->first_name.' '.$user->last_name,
                    'email' => $user->email,
                    'age' => $user->age ?? null,
                    'salary' => $user && isset($user->current_salary_per_annum) ? $user->current_salary_per_annum.'$' : null,
                    'exp' => $exp,
                    'country' => $countryName,
                    'user_status' => ucfirst($status),
                    'media' => $user->media->first()?->path,
                ];
            });
        return view($this->name . '.users.index')->with('users', $users);
    }

    public function create()
    {
        $companies = $this->companyService->getCompanies();

        return view($this->name . '.users.create')->with('companies', $companies);
    }


    public function edit($id)
    {
        return view($this->name . '.users.edit');
    }
    public function store(UserStoreRequest $request)
    {
        try {
            DB::beginTransaction();

            // Create company and get the instance
            $user = User::create($request->except('path', '_token'));

            // Handle file upload
            if ($request->hasFile('path')) {
                $imagePath = $this->storeImage($request->file('path'), 'companies');
                $storagePath = 'storage/' . $imagePath;

                Media::create([
                    'model_name' => User::class,
                    'model_id' => $user->id,
                    'path' => $storagePath,
                    'type' => config('constants.path.image'),
                ]);
            }
            if ($user) {
                $user->roles()->attach(config('constants.roles.EMPLOYEE'), ['created_at' => now(), 'updated_at' => now()]);
            }

            DB::commit();

            return redirect()->route($this->name . '.user.index')->with('success', 'User created successfully.');
        } catch (\Exception $e) {
            DB::rollBack();
            dd($e->getMessage());
            return redirect()->back()->with('error', 'Something went wrong');
        }


    }
}
