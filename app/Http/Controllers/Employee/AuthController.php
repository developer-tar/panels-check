<?php

namespace App\Http\Controllers\Employee;

use App\AuthenticatesUsers;
use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    use AuthenticatesUsers;
    public function signIn(){
        return view('employee.auth.sign-in');
    }

    public function signUp(){
        return view('employee.auth.sign-up');
    }
    public function authenticate(LoginRequest $request)
    {
        $role = 'employee';
        return $this->authenticateUser($request, 'employee.dashboard.index', $role);
    }
}
