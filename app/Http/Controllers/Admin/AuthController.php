<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller {
    public function signIn() {

        return view('admin.auth.sign-in');
    }

    public function signUp() {
        return view('admin.auth.sign-up');
    }
    public function authenticate(LoginRequest $request) {
        dd('d');
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('admin.dashboard.index')->with('success', 'Login successful');
        } else {
            return back()->with('error', 'Either email or password is incorrect');
        }
    }
}
