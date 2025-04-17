<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthenticationController extends Controller
{
    public function signUp()
    {
        return view('authentication.singup');
    }

    public function signIn()
    {
        return view('authentication.signin');
    }

    public function signInQrcode()
    {
        return view('authentication.signin-qrcode');
    }

    public function error()
    {
        return view('authentication.error');
    }
}
