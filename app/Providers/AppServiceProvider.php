<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Models\User;
use Illuminate\Auth\Access\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
class AppServiceProvider extends ServiceProvider {
    /**
     * Register any application services.
     */
    public function register(): void {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void {
        View::composer('*', function ($view) {
            $guard = app()->bound('activeGuard') ? app('activeGuard') : null;
            
            $user = $guard ? Auth::guard($guard)->user() : null;
            $media = null;
        
            if ($user) {
                // Re-fetch the user to ensure relationships work properly (optional)
                $user = User::find($user->id);
                $media = $user->media()->first()?->path; 
            }
                // dd($user, $media, $guard);
            $view->with(compact('user', 'media', 'guard'));
        });
        
        Gate::define('create-company', function (User $user) {
            
            return $user->isAdmin()
                ? Response::allow()
                : Response::deny('You must be an admin.');
        });
    }
}
