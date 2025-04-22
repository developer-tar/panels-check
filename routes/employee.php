<?php

use App\Http\Controllers\Employee\AuthController;
use App\Http\Controllers\Employee\BenefitsEnrollController;
use App\Http\Controllers\Employee\CompanyController;
use App\Http\Controllers\Employee\DashboardController;
use App\Http\Controllers\Employee\HrController;
use App\Http\Controllers\Employee\PlansController;
use App\Http\Controllers\Employee\RolesController;
use App\Http\Controllers\Employee\UsersController;
use App\Http\Controllers\Employee\VendorController;
use App\Http\Controllers\Employee\NotificationController;
use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    return to_route('employee.dashboard.index');
}); 
Route::get('/profile', function(){
    return view('employee.profile');
})->name('employee.profile');

Route::get('/transaction', function(){
    return view('employee.transaction');
})->name('employee.transaction'); 

Route::get('/help-centers', function(){
    return view('employee.help');
})->name('employee.help-center'); 

Route::get('/chat', function(){
    return view('employee.chat');
})->name('employee.transfer.chat'); 

Route::get('/comparison-benefit-tools', function(){
    return view('employee.comparison-tools');
})->name('employee.comparison-tools'); 

//auth 
Route::group(['prefix' => 'auth', 'as' => 'employee.auth.'], function(){
    Route::get('/sign-in', [AuthController::class, 'signIn'])->name('sign-in');
    Route::get('/sign-up', [AuthController::class, 'signUp'])->name('sign-up');
});

Route::group(['prefix' => 'dashboard', 'as' => 'employee.dashboard.'], function(){
    Route::get('/', [DashboardController::class, 'index'])->name('index');
});
Route::group(['prefix' => 'user', 'as' => 'employee.user.'], function(){
    Route::get('/', [UsersController::class, 'index'])->name('index');
    Route::get('create', [UsersController::class, 'create'])->name('create');
    Route::get('{id}/edit', [UsersController::class, 'edit'])->name('edit');
});

// roles
Route::group(['prefix' => 'role', 'as' => 'employee.role.'], function(){
    Route::get('/', [RolesController::class, 'index'])->name('index');
    Route::get('create', [RolesController::class, 'create'])->name('create');
    Route::get('{id?}/edit', [RolesController::class, 'edit'])->name('edit');
});
//tracking logs
Route::get('/logs', [DashboardController::class, 'activityLogs'])->name('employee.logs');

// plans
Route::group(['prefix' => 'plan', 'as' => 'employee.plan.'], function(){
    Route::get('/', [PlansController::class, 'index'])->name('index');
    Route::get('create', [PlansController::class, 'create'])->name('create');
    Route::get('{id?}/edit', [PlansController::class, 'edit'])->name('edit');
});

// Benefits Enrollment
Route::group(['prefix' => 'benefit', 'as' => 'employee.benefit.'], function(){
    Route::get('/', [BenefitsEnrollController::class, 'index'])->name('index');
    Route::get('create', [BenefitsEnrollController::class, 'create'])->name('create');
    Route::get('{id?}/edit', [BenefitsEnrollController::class, 'edit'])->name('edit');
});

// HR Management
Route::group(['prefix' => 'hr', 'as' => 'employee.hr.'], function(){
    Route::get('/', [HrController::class, 'index'])->name('index');
    Route::get('create', [HrController::class, 'create'])->name('create');
    Route::get('{id?}/edit', action: [HrController::class, 'edit'])->name('edit');
});

// Vendor Management
Route::group(['prefix' => 'vendor', 'as' => 'employee.vendor.'], function(){
    Route::get('/', [VendorController::class, 'index'])->name('index');
    Route::get('create', action: [VendorController::class, 'create'])->name('create');
    Route::get('{id?}/edit', action: [VendorController::class, 'edit'])->name('edit');
});

Route::get('/claims-billing', [DashboardController::class, 'claimsBilling'])->name('employee.claims.billing');

// Notification
Route::group(['prefix' => 'notification', 'as' => 'employee.notification.'], function(){
    Route::get('/', [NotificationController::class, 'index'])->name('index');
    Route::get('create', action: [NotificationController::class, 'create'])->name('create');
    Route::get('{id?}/edit', action: [NotificationController::class, 'edit'])->name('edit');
});
// Analytics & reports
Route::get('/analytics', [DashboardController::class, 'analytics'])->name('employee.analytics');

//company management
Route::group(['prefix' => 'company', 'as' => 'employee.company.'], function(){
    Route::get('/', [CompanyController::class, 'index'])->name('index');
    Route::get('create', [CompanyController::class, 'create'])->name('create');
    Route::get('{id}/edit', [CompanyController::class, 'edit'])->name('edit');
});