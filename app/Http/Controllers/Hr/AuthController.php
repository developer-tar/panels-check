<?php

namespace App\Http\Controllers\Hr;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function signIn(){
        return view('hr.auth.sign-in');
    }

    public function signUp(){
        return view('hr.auth.sign-up');
    }
}
