<?php

namespace App;


use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
trait AuthenticatesUsers
{
    public function authenticateUser(Request $request, string $redirectRoute): RedirectResponse
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route($redirectRoute)->with('success', 'Login successful');
        }

        return back()->with('error', 'Either email or password is incorrect');
    }
}
