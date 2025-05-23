<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

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
            'set.guest' => \App\Http\Middleware\RoleRedirect::class,
            'set.auth' => \App\Http\Middleware\RoleAuthenticate::class,   
        ]);

    })
    ->withExceptions(function (Exceptions $exceptions) {
       
        $exceptions->render(function (NotFoundHttpException $e, Request $request) {
            return response()->view('error');
        });
    })->create();
