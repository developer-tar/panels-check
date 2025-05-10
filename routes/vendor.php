<?php

use App\Http\Controllers\Vendor\AuthController;
use App\Http\Controllers\Vendor\BenefitsEnrollController;
use App\Http\Controllers\Vendor\CompanyController;
use App\Http\Controllers\Vendor\DashboardController;
use App\Http\Controllers\Vendor\HrController;
use App\Http\Controllers\Vendor\PlansController;
use App\Http\Controllers\Vendor\RolesController;
use App\Http\Controllers\Vendor\UsersController;
use App\Http\Controllers\Vendor\VendorController;
use App\Http\Controllers\Vendor\NotificationController;
use Illuminate\Support\Facades\Route;


//auth
Route::group(['prefix' => 'auth', 'as' => 'vendor.auth.', 'middleware' => 'set.guest:vendor'], function () {
    Route::get('/sign-in', [AuthController::class, 'signIn'])->name('sign-in');
    Route::get('/sign-up', [AuthController::class, 'signUp'])->name('sign-up');
    Route::post('/sign-up-process', [AuthController::class, 'signUpProcess'])->name('sign-up-process');
    Route::post('/authenticate', [AuthController::class, 'authenticate'])->name('authenticate');
   
});

Route::group(['middleware' => 'set.auth:vendor'], function () {

    Route::post('logout', [AuthController::class, 'logout'])->name('vendor.logout');
    Route::get('/', function () {
        return to_route('vendor.dashboard.index');
    });
    Route::get('/chat', function () {
        return view('vendor.chat');
    })->name('vendor.transfer.chat');

    // Route::get('/profile', function () {
    //     return view('vendor.profile');
    // })->name('vendor.profile');

    Route::get('/transaction', function () {
        return view('vendor.transaction');
    })->name('vendor.transaction');



    Route::group(['prefix' => 'dashboard', 'as' => 'vendor.dashboard.', ], function () {
        Route::get('/', [DashboardController::class, 'index'])->name('index');
    });
    Route::group(['prefix' => 'user', 'as' => 'vendor.user.'], function () {
        Route::get('/', [UsersController::class, 'index'])->name('index');
        Route::get('create', [UsersController::class, 'create'])->name('create');
        Route::get('{id}/edit', [UsersController::class, 'edit'])->name('edit');
        Route::get('profile', [UsersController::class, 'profile'])->name('profile');
    });

    // roles
    Route::group(['prefix' => 'role', 'as' => 'vendor.role.'], function () {
        Route::get('/', [RolesController::class, 'index'])->name('index');
        Route::get('create', [RolesController::class, 'create'])->name('create');
        Route::get('{id?}/edit', [RolesController::class, 'edit'])->name('edit');
    });
    //tracking logs
    Route::get('/logs', [DashboardController::class, 'activityLogs'])->name('vendor.logs');

    // plans
    Route::group(['prefix' => 'plan', 'as' => 'vendor.plan.'], function () {
        Route::get('/', [PlansController::class, 'index'])->name('index');
        Route::get('create', [PlansController::class, 'create'])->name('create');
        Route::post('store', [PlansController::class, 'store'])->name('store');
        Route::get('{id?}/edit', [PlansController::class, 'edit'])->name('edit');
    });

    // Benefits Enrollment
    Route::group(['prefix' => 'benefit', 'as' => 'vendor.benefit.'], function () {
        Route::get('/', [BenefitsEnrollController::class, 'index'])->name('index');
        Route::get('create', [BenefitsEnrollController::class, 'create'])->name('create');
        Route::get('{id?}/edit', [BenefitsEnrollController::class, 'edit'])->name('edit');
    });

    // HR Management
    Route::group(['prefix' => 'hr', 'as' => 'vendor.hr.'], function () {
        Route::get('/', [HrController::class, 'index'])->name('index');
        Route::get('create', [HrController::class, 'create'])->name('create');
        Route::get('{id?}/edit', action: [HrController::class, 'edit'])->name('edit');
    });

    // Vendor Management
    Route::group(['prefix' => 'vendor', 'as' => 'vendor.vendor.'], function () {
        Route::get('/', [VendorController::class, 'index'])->name('index');
        Route::get('create', action: [VendorController::class, 'create'])->name('create');
        Route::get('{id?}/edit', action: [VendorController::class, 'edit'])->name('edit');
    });

    Route::get('/claims-billing', [DashboardController::class, 'claimsBilling'])->name('vendor.claims.billing');
    Route::post('{claim}/approve/status', [DashboardController::class, 'approveStatus'])->name('vendor.approve.status');
    Route::post('{claim}/reject/status', [DashboardController::class, 'rejectStatus'])->name('vendor.reject.status');

    // Notification
    Route::group(['prefix' => 'notification', 'as' => 'vendor.notification.'], function () {
        Route::get('/', [NotificationController::class, 'index'])->name('index');
        Route::get('create', action: [NotificationController::class, 'create'])->name('create');
        Route::get('{id?}/edit', action: [NotificationController::class, 'edit'])->name('edit');
    });
    // Analytics & reports
    Route::get('/analytics', [DashboardController::class, 'analytics'])->name('vendor.analytics');

    //company management
    Route::group(['prefix' => 'company', 'as' => 'vendor.company.'], function () {
        Route::get('/', [CompanyController::class, 'index'])->name('index');
        Route::get('create', [CompanyController::class, 'create'])->name('create');
        Route::get('{id}/edit', [CompanyController::class, 'edit'])->name('edit');
    });
});