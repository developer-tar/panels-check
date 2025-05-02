<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class VendorAuthenticate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
      
        if (!Auth::guard('vendor')->check()) {
            
            return to_route('vendor.auth.sign-in')->with('error', 'You must be logged in to access this area.');
        }
        return $next($request);
    }
}
