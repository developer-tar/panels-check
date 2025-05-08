<?php
use Illuminate\Support\Facades\Auth;

if (!function_exists('getCurrentAuthenticatedUser')) {
    function getCurrentAuthenticatedUser()
    {
    foreach (array_keys(config('auth.guards')) as $guard) {
            
            if (Auth::guard($guard)->check()) {
                return Auth::guard($guard)->user();
            }
        }

        return null;
    }
}