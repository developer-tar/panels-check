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
    if (!function_exists('getFileType')) {
        function getFileType($extension)
        {
            return match ($extension) {
                'jpg', 'jpeg', 'png', 'gif' => config('constants.path.image'),
                'mp4', 'avi', 'mkv' => config('constants.path.video'),
                'pdf' => config('constants.path.pdf'),
                default => config('constants.path.others'),
            };
        }
    }
}