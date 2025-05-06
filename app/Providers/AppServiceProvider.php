<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Models\User;
use Illuminate\Auth\Access\Response;
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
        
        Gate::define('create-company', function (User $user) {
            
            return $user->isAdmin()
                ? Response::allow()
                : Response::deny('You must be an admin.');
        });
    }
}
