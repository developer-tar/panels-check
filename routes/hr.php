<?php

use App\Http\Controllers\Hr\AuthController;
use App\Http\Controllers\Hr\ComplianceController;
use App\Http\Controllers\Hr\BenefitsEnrollController;
use App\Http\Controllers\Hr\CompanyController;
use App\Http\Controllers\Hr\DashboardController;
use App\Http\Controllers\Hr\HrController;
use App\Http\Controllers\Hr\PlansController;
use App\Http\Controllers\Hr\PolicyController;
use App\Http\Controllers\Hr\RolesController;
use App\Http\Controllers\Hr\UsersController;
use App\Http\Controllers\Hr\VendorController;
use App\Http\Controllers\Hr\NotificationController;
use Illuminate\Support\Facades\Route;


//auth
Route::group(['prefix' => 'auth', 'as' => 'hr.auth.', 'middleware' => 'hr.guest'], function () {
    Route::get('sign-in', [AuthController::class, 'signIn'])->name('sign-in');
    Route::get('sign-up', [AuthController::class, 'signUp'])->name('sign-up');
    Route::post('sign-up-process', [AuthController::class, 'signUpProcess'])->name('sign-up-process');
    Route::post('authenticate', [AuthController::class, 'authenticate'])->name('authenticate');

});
Route::group(['middleware' => 'hr.auth'], function () {

    Route::get('/', function () {
        return to_route('hr.dashboard.index');
    });
    Route::get('/chat', function () {
        return view('hr.chat');
    })->name('hr.transfer.chat');

    Route::get('/profile', function () {
        return view('hr.profile');
    })->name('hr.profile');
    Route::post('logout', [AuthController::class, 'logout'])->name('hr.logout');


    Route::group(['prefix' => 'dashboard', 'as' => 'hr.dashboard.'], function () {
        Route::get('/', [DashboardController::class, 'index'])->name('index');
    });
    Route::group(['prefix' => 'user', 'as' => 'hr.user.'], function () {
        Route::get('/', action: [UsersController::class, 'index'])->name('index');
        Route::get('create', [UsersController::class, 'create'])->name('create');
        Route::post('store', [UsersController::class, 'store'])->name('store');
        Route::get('{id}/edit', [UsersController::class, 'edit'])->name('edit');
        Route::get('/pending_request', [UsersController::class, 'pendingRequest'])->name('pending.request');
        Route::post('{user}/approve', [UsersController::class, 'approve'])->name('approve');
        Route::post('{user}/reject', [UsersController::class, 'reject'])->name('reject');

    });

    // roles
    Route::group(['prefix' => 'role', 'as' => 'hr.role.'], function () {
        Route::get('/', [RolesController::class, 'index'])->name('index');
        Route::get('create', [RolesController::class, 'create'])->name('create');
        Route::get('{id?}/edit', [RolesController::class, 'edit'])->name('edit');
    });
    //tracking logs
    Route::get('/logs', [DashboardController::class, 'activityLogs'])->name('hr.logs');

    // plans
    Route::group(['prefix' => 'plan', 'as' => 'hr.plan.'], function () {
        Route::get('/', [PlansController::class, 'index'])->name('index');
        Route::get('create', [PlansController::class, 'create'])->name('create');
        Route::get('{id?}/edit', [PlansController::class, 'edit'])->name('edit');
    });

    // Benefits Enrollment
    Route::group(['prefix' => 'benefit', 'as' => 'hr.benefit.'], function () {
        Route::get('/', [BenefitsEnrollController::class, 'index'])->name('index');
        Route::get('create', [BenefitsEnrollController::class, 'create'])->name('create');
        Route::get('{id?}/edit', [BenefitsEnrollController::class, 'edit'])->name('edit');
    });

    // HR Management
    Route::group(['prefix' => 'hr', 'as' => 'hr.hr.'], function () {
        Route::get('/', [HrController::class, 'index'])->name('index');
        Route::get('create', [HrController::class, 'create'])->name('create');
        Route::get('{id?}/edit', action: [HrController::class, 'edit'])->name('edit');
    });

    // Vendor Management
    Route::group(['prefix' => 'vendor', 'as' => 'hr.vendor.'], function () {
        Route::get('/', [VendorController::class, 'index'])->name('index');
        Route::get('create', action: [VendorController::class, 'create'])->name('create');
        Route::get('{id?}/edit', action: [VendorController::class, 'edit'])->name('edit');
    });

    Route::get('/claims-billing', [DashboardController::class, 'claimsBilling'])->name('hr.claims.billing');

    // Notification
    Route::group(['prefix' => 'notification', 'as' => 'hr.notification.'], function () {
        Route::get('/', [NotificationController::class, 'index'])->name('index');
        Route::get('create', action: [NotificationController::class, 'create'])->name('create');
        Route::get('{id?}/edit', action: [NotificationController::class, 'edit'])->name('edit');
    });
    // Analytics & reports
    Route::get('/analytics', [DashboardController::class, 'analytics'])->name('hr.analytics');

    // Compliance
    Route::group(['prefix' => 'compliance', 'as' => 'hr.compliance.'], function () {
        Route::get('/', [ComplianceController::class, 'index'])->name('index');
        Route::get('create', action: [ComplianceController::class, 'create'])->name('create');
        Route::get('{id?}/edit', action: [ComplianceController::class, 'edit'])->name('edit');
    });
    // Compliance
    Route::group(['prefix' => 'policy', 'as' => 'hr.policy.'], function () {
        Route::get('/', [PolicyController::class, 'index'])->name('index');
        Route::get('create', action: [PolicyController::class, 'create'])->name('create');
        Route::get('{id?}/edit', action: [PolicyController::class, 'edit'])->name('edit');
    });
});