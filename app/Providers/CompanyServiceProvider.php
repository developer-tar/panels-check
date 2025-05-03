<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\CompanyService;

class CompanyServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
         // Bind CompanyService to the container
         $this->app->singleton(CompanyService::class, function ($app) {
            return new CompanyService();
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
