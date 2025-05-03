<?php

namespace App\Http\Controllers\Admin;

use App\AuthenticatesUsers;
use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\SignUpRequest;
use App\LogoutUserTrait;
use App\SignUpUserTrait;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Request;

class AuthController extends Controller
{
    use AuthenticatesUsers, SignUpUserTrait, LogoutUserTrait;
    private  $name = 'admin';
    public function signIn()
    {

        return view($this->name.'.auth.sign-in');
    }

    public function signUp()
    {
        return view($this->name.'.auth.sign-up');
    }
    public function authenticate(LoginRequest $request)
    {
        
        return $this->authenticateUser($request, $this->name.'.dashboard.index', $this->name);
    }
    public function signUpProcess(SignUpRequest $request){
      
        return $this->signUpUser($request, $this->name.'.auth.sign-in', $this->name);
    }
    public function logout(Request $request)
    {
        return $this->logoutUser($this->name);
    }
}
