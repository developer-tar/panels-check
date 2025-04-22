<?php

namespace App\Http\Controllers\Vendor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function signIn(){
       
        return view('vendor.auth.sign-in');
    }

    public function signUp(){
        return view('vendor.auth.sign-up');
    }
}
