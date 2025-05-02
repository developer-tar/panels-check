<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Support\Facades\Route;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
        then: function () {
            Route::middleware('web')->prefix('admin')->group(base_path('routes/admin.php'));
            Route::middleware('web')->prefix('hr')->group(base_path('routes/hr.php'));
            Route::middleware('web')->prefix('employee')->group(base_path('routes/employee.php'));
            Route::middleware('web')->prefix('vendor')->group(base_path('routes/vendor.php'));
        },
    )
    ->withMiddleware(function (Middleware $middleware) {
       
        $middleware->alias([
            'admin.auth' => \App\Http\Middleware\AdminAuthenticate::class,
            'hr.auth' => \App\Http\Middleware\HrAuthenticate::class,
            'vendor.auth' => \App\Http\Middleware\VendorAuthenticate::class,        
            'admin.guest' => \App\Http\Middleware\AdminRedirect::class,
            'hr.guest' => \App\Http\Middleware\HrRedirect::class,
            'vendor.guest' => \App\Http\Middleware\VendorRedirect::class,  
            'employee.guest' => \App\Http\Middleware\EmployeeRedirect::class,
            'employee.auth' => \App\Http\Middleware\EmployeeAuthenticate::class,   
        ]);

    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
