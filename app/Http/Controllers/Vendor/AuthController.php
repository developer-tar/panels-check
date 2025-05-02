<?php

namespace App\Http\Controllers\Vendor;

use App\AuthenticatesUsers;
use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    use AuthenticatesUsers;
    public function signIn(){
       
        return view('vendor.auth.sign-in');
    }

    public function signUp(){
        return view('vendor.auth.sign-up');
    }
    public function authenticate(LoginRequest $request)
    {
        $role = 'vendor';
        return $this->authenticateUser($request, 'vendor.dashboard.index', $role);
    }
}
