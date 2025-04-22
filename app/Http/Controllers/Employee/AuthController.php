<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function signIn(){
        return view('employee.auth.sign-in');
    }

    public function signUp(){
        return view('employee.auth.sign-up');
    }
}
