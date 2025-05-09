<?php

namespace App\Http\Controllers\Vendor;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Services\CompanyService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    private $name = 'vendor';
    protected $companyService;
    public function __construct(CompanyService $companyService) {
        $this->companyService = $companyService;
    }

    public function index(){
        return view($this->name.'.users.index');
    }

    public function create(){
        return view($this->name.'.users.create');
    }

    public function edit($id){
        return view($this->name.'.users.edit');
    }
    public function profile() {
        $companyId = null;
        $companyDetails = null;
        if (Auth::guard('vendor')->check()) {
            $details = User::with('company')->where('id', Auth::guard('vendor')->user()->id)->first();
            if ($details->company?->id) {
                $companyId = $details->company->id;
                $companyDetails = $details->company;
            }
        }

        $companies = $this->companyService->getCompanies();
       
        return view($this->name.'.profile', compact('companies', 'companyId', 'companyDetails'));
    }
}
