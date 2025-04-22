<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function signIn(){
     
        return view('admin.auth.sign-in');
    }

    public function signUp(){
        return view('admin.auth.sign-up');
    }
}
