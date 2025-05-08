<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RoleAuthenticate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $role): Response
    {
      
        if (!Auth::guard($role)->check()) {
            
            return to_route($role.'.auth.sign-in')->with('error', config('constants.warning_message.login'));
        }
        app()->singleton('activeGuard', fn () => $role);
        return $next($request);
    }
}
