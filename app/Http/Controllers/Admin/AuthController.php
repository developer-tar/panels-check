<?php

namespace App\Http\Controllers\Admin;

use App\AuthenticatesUsers;
use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    use AuthenticatesUsers;
    public function signIn()
    {

        return view('admin.auth.sign-in');
    }

    public function signUp()
    {
        return view('admin.auth.sign-up');
    }
    public function authenticate(LoginRequest $request)
    {
        $role = 'admin';
        return $this->authenticateUser($request, 'admin.dashboard.index', $role);
    }
}
