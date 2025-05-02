<?php

namespace App;


use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
trait AuthenticatesUsers
{
    public function authenticateUser(Request $request, string $redirectRoute, $role): RedirectResponse
    {
        if (Auth::guard($role)->attempt(['email' => $request->email, 'password' => $request->password])) {
            $user = Auth::guard($role)->user();

            if ($user && $user->roles()->whereNot('name', Str::upper($role))->exists()) {
                Auth::guard($role)->logout();
                return back()->with('error','You do not have permission to access this area.');
             
            }
            
            return redirect()->route($redirectRoute)->with('success', 'Login successful');
        }

        return back()->with('error', 'Either email or password is incorrect');
    }
}
