<?php

namespace App;


use App\Models\User;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
trait LogoutUserTrait
{
    private function logoutUser($name)
    {
        $guard = $name;
        $key = $name;
        if (Auth::guard($guard)->check()) {
            Auth::guard($guard)->logout();
            session()->invalidate();
            session()->regenerateToken();
        }
        return redirect()->route($key.'.auth.sign-in')->with('success', 'Logout Successfully');
         // Change 'login' to the route for your guard's login
    
    }
}
