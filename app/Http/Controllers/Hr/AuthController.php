<?php

namespace App\Http\Controllers\Hr;

use App\AuthenticatesUsers;
use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    use AuthenticatesUsers;
    public function signIn(){
        return view('hr.auth.sign-in');
    }

    public function signUp(){
        return view('hr.auth.sign-up');
    }
    public function authenticate(LoginRequest $request)
    {
        $role = 'hr';
        return $this->authenticateUser($request, 'hr.dashboard.index', $role);
    }
}
