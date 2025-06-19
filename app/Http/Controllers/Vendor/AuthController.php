<?php

namespace App\Http\Controllers\Vendor;

use App\AuthenticatesUsers;
use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\SignUpRequest;
use App\LogoutUserTrait;
use App\Models\Domain;
use App\SignUpUserTrait;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    use AuthenticatesUsers, SignUpUserTrait, LogoutUserTrait;
    private  $name = 'vendor';
    public function signIn()
    {
        return view($this->name.'.auth.sign-in');
    }

    public function signUp()
    {
        $domains = Domain::all();
        return view($this->name.'.auth.sign-up')->with('domains', $domains);
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
