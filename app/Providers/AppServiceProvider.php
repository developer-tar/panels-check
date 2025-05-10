<?php

namespace App\Providers;

use App\Models\Company;
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
            $compyId = null;
            if ($user) {
                // Re-fetch the user to ensure relationships work properly (optional)
                $user = User::find($user->id);
                $media = $user->media()->where('folder_name','personal_profile')->first()?->path;
               
                $compyId = Company::where('id',$user?->company_id)->value('id');
               
               
            }
                // dd($user, $media, $guard,$company);
            $view->with(compact('user', 'media', 'guard', 'compyId'));
        });
        
        Gate::define('create-company', function (User $user) {
            
            return $user->isAdmin()
                ? Response::allow()
                : Response::deny('You must be an admin.');
        });
    }
}
