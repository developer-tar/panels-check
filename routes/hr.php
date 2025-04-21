<?php

use App\Http\Controllers\Hr\BenefitsEnrollController;
use App\Http\Controllers\Hr\CompanyController;
use App\Http\Controllers\Hr\DashboardController;
use App\Http\Controllers\Hr\HrController;
use App\Http\Controllers\Hr\PlansController;
use App\Http\Controllers\Hr\RolesController;
use App\Http\Controllers\Hr\UsersController;
use App\Http\Controllers\Hr\VendorController;
use App\Http\Controllers\Hr\NotificationController;
use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    return to_route('hr.dashboard.index');
}); 

Route::group(['prefix' => 'dashboard', 'as' => 'hr.dashboard.'], function(){
    Route::get('/', [DashboardController::class, 'index'])->name('index');
});
Route::group(['prefix' => 'user', 'as' => 'hr.user.'], function(){
    Route::get('/', [UsersController::class, 'index'])->name('index');
    Route::get('create', [UsersController::class, 'create'])->name('create');
    Route::get('{id}/edit', [UsersController::class, 'edit'])->name('edit');
});

// roles
Route::group(['prefix' => 'role', 'as' => 'hr.role.'], function(){
    Route::get('/', [RolesController::class, 'index'])->name('index');
    Route::get('create', [RolesController::class, 'create'])->name('create');
    Route::get('{id?}/edit', [RolesController::class, 'edit'])->name('edit');
});
//tracking logs
Route::get('/logs', [DashboardController::class, 'activityLogs'])->name('hr.logs');

// plans
Route::group(['prefix' => 'plan', 'as' => 'hr.plan.'], function(){
    Route::get('/', [PlansController::class, 'index'])->name('index');
    Route::get('create', [PlansController::class, 'create'])->name('create');
    Route::get('{id?}/edit', [PlansController::class, 'edit'])->name('edit');
});

// Benefits Enrollment
Route::group(['prefix' => 'benefit', 'as' => 'hr.benefit.'], function(){
    Route::get('/', [BenefitsEnrollController::class, 'index'])->name('index');
    Route::get('create', [BenefitsEnrollController::class, 'create'])->name('create');
    Route::get('{id?}/edit', [BenefitsEnrollController::class, 'edit'])->name('edit');
});

// HR Management
Route::group(['prefix' => 'hr', 'as' => 'hr.hr.'], function(){
    Route::get('/', [HrController::class, 'index'])->name('index');
    Route::get('create', [HrController::class, 'create'])->name('create');
    Route::get('{id?}/edit', action: [HrController::class, 'edit'])->name('edit');
});

// Vendor Management
Route::group(['prefix' => 'vendor', 'as' => 'hr.vendor.'], function(){
    Route::get('/', [VendorController::class, 'index'])->name('index');
    Route::get('create', action: [VendorController::class, 'create'])->name('create');
    Route::get('{id?}/edit', action: [VendorController::class, 'edit'])->name('edit');
});

Route::get('/claims-billing', [DashboardController::class, 'claimsBilling'])->name('hr.claims.billing');

// Notification
Route::group(['prefix' => 'notification', 'as' => 'hr.notification.'], function(){
    Route::get('/', [NotificationController::class, 'index'])->name('index');
    Route::get('create', action: [NotificationController::class, 'create'])->name('create');
    Route::get('{id?}/edit', action: [NotificationController::class, 'edit'])->name('edit');
});
// Analytics & reports
Route::get('/analytics', [DashboardController::class, 'analytics'])->name('hr.analytics');

//company management
Route::group(['prefix' => 'company', 'as' => 'hr.company.'], function(){
    Route::get('/', [CompanyController::class, 'index'])->name('index');
    Route::get('create', [CompanyController::class, 'create'])->name('create');
    Route::get('{id}/edit', [CompanyController::class, 'edit'])->name('edit');
});