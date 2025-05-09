<?php

namespace App\Http\Controllers\Vendor;

use App\Http\Controllers\Controller;
use App\Http\Requests\PlanRequest;
use App\Models\User;
use App\Services\CompanyService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PlansController extends Controller
{
    private $name = 'vendor';
    protected $companyService;
    public function __construct(CompanyService $companyService) {
        $this->companyService = $companyService;
    }
    public function index(){
        return view($this->name.'.plans.index');
    }

    public function create(){
        $domains = $this->companyService->getCompanies('vendor');
       
        return view($this->name.'.plans.create')->with('domains', $domains);
    }

    public function edit($id){
        return view($this->name.'.plans.edit');
    }
    public function store(PlanRequest $request){
        try {
            DB::beginTransaction();
            $data = $request->except('_token', 'path', 'role');
            $data['age'] = $request->user_age;
            $data['email'] = $request->user_email;
            $data['phone'] = $request->user_phone;

            unset($data['user_age'], $data['user_email'], $data['user_phone']);

            $user = null;

            if (isset($request->role)) {
                
                $user = User::find(Auth::guard(strtolower($request->role))->id());
                
                $user->update($data);
            }
            
            // Handle file upload
       
            if ($request->filled('removeImage')) {
                $user->media()->limit(1)->delete();
            }
            DB::commit();
            return back()->with('success', config('constants.profile_update'));
        } catch (\Exception $e) {
            DB::rollBack();
            dd($e->getMessage());
            return back()->with('error', config('constants.wrong_message'));
        }
    }
}
