<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\BenefitsEnrollController;
use App\Http\Controllers\Admin\CompanyController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DomainController;
use App\Http\Controllers\Admin\HrController;
use App\Http\Controllers\Admin\PlansController;
use App\Http\Controllers\Admin\RolesController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Admin\VendorController;
use App\Http\Controllers\Admin\NotificationController;
use Illuminate\Support\Facades\Route;



//auth
Route::group(['prefix' => 'auth', 'as' => 'admin.auth.', 'middleware' => 'set.guest:admin'], function () {
    Route::get('sign-in', [AuthController::class, 'signIn'])->name('sign-in');
    Route::get('sign-up', [AuthController::class, 'signUp'])->name('sign-up');
    Route::post('sign-up-process', [AuthController::class, 'signUpProcess'])->name('sign-up-process');
    Route::post('authenticate', [AuthController::class, 'authenticate'])->name('authenticate');
});

Route::group(['middleware' => 'set.auth:admin'], function () {
    Route::post('logout', action: [AuthController::class, 'logout'])->name('admin.logout');
    Route::get('/', function () {
        return to_route('admin.dashboard.index');
    });
    Route::get('/chat', function () {
        return view('admin.chat');
    })->name('admin.transfer.chat');

    Route::get('/profile', function () {
        return view('admin.profile');
    })->name('admin.profile');

    Route::get('/security', function () {
        return view('admin.security');
    })->name('admin.security');

    Route::get('/transaction', function () {
        return view('admin.transaction');
    })->name('admin.transaction');
    Route::group(['prefix' => 'dashboard', 'as' => 'admin.dashboard.'], function () {
        Route::get('/', [DashboardController::class, 'index'])->name('index');
    })->middleware('web');
    Route::group(['prefix' => 'user', 'as' => 'admin.user.'], function () {
        Route::get('/', [UsersController::class, 'index'])->name('index');
        Route::get('create', [UsersController::class, 'create'])->name('create');
        Route::post('store', [UsersController::class, 'store'])->name('store');
        Route::get('{id}/edit', [UsersController::class, 'edit'])->name('edit');
        Route::get('/kyc/pending_request', [UsersController::class, 'kycPendingRequest'])->name('kyc.pending.request');
        Route::get('/pending_request', [UsersController::class, 'pendingRequest'])->name('pending.request');
        Route::post('{user}/approve', [UsersController::class, 'approve'])->name('approve');
        Route::post('{user}/reject', [UsersController::class, 'reject'])->name('reject');
        Route::post('{user}/approve/status', [UsersController::class, 'approveStatus'])->name('approve.status');
        Route::post('{user}/reject/status', [UsersController::class, 'rejectStatus'])->name('reject.status');
    });

    // roles
    Route::group(['prefix' => 'role', 'as' => 'admin.role.'], function () {
        Route::get('/', [RolesController::class, 'index'])->name('index');
        Route::get('create', [RolesController::class, 'create'])->name('create');
        Route::get('{id?}/edit', [RolesController::class, 'edit'])->name('edit');
    });
    //tracking logs
    Route::get('/logs', [DashboardController::class, 'activityLogs'])->name('admin.logs');

    // plans
    Route::group(['prefix' => 'plan', 'as' => 'admin.plan.'], function () {
        Route::get('/', [PlansController::class, 'index'])->name('index');
        Route::get('create', [PlansController::class, 'create'])->name('create');
        Route::get('{id?}/edit', [PlansController::class, 'edit'])->name('edit');
    });

    // Benefits Enrollment
    Route::group(['prefix' => 'benefit', 'as' => 'admin.benefit.'], function () {
        Route::get('/', [BenefitsEnrollController::class, 'index'])->name('index');
        Route::get('create', [BenefitsEnrollController::class, 'create'])->name('create');
        Route::get('{id?}/edit', [BenefitsEnrollController::class, 'edit'])->name('edit');
    });

    // HR Management
    Route::group(['prefix' => 'hr', 'as' => 'admin.hr.'], function () {
        Route::get('/', [HrController::class, 'index'])->name('index');
        Route::get('create', [HrController::class, 'create'])->name('create');
        Route::get('{id?}/edit', action: [HrController::class, 'edit'])->name('edit');
    });

    // Vendor Management
    Route::group(['prefix' => 'vendor', 'as' => 'admin.vendor.'], function () {
        Route::get('/', [VendorController::class, 'index'])->name('index');
        Route::get('create', action: [VendorController::class, 'create'])->name('create');
        Route::get('{id?}/edit', action: [VendorController::class, 'edit'])->name('edit');
    });

    Route::get('/claims-billing', [DashboardController::class, 'claimsBilling'])->name('admin.claims.billing');

    // Notification
    Route::group(['prefix' => 'notification', 'as' => 'admin.notification.'], function () {
        Route::get('/', [NotificationController::class, 'index'])->name('index');
        Route::get('create', action: [NotificationController::class, 'create'])->name('create');
        Route::get('{id?}/edit', action: [NotificationController::class, 'edit'])->name('edit');
    });
    // Analytics & reports
    Route::get('/analytics', [DashboardController::class, 'analytics'])->name('admin.analytics');

    //company management
    Route::group(['prefix' => 'company', 'as' => 'admin.company.'], function () {
        Route::get('/', [CompanyController::class, 'index'])->name('index');
        Route::get('create', [CompanyController::class, 'create'])->name('create');
        Route::post('store', [CompanyController::class, 'store'])->name('store');

        Route::get('{id}/edit', [CompanyController::class, 'edit'])->name('edit');
    });
    //Domain management
    Route::group(['prefix' => 'domain', 'as' => 'admin.domain.'], function () {
        Route::get('/', [DomainController::class, 'index'])->name('index');
        Route::get('create', [DomainController::class, 'create'])->name('create');
        Route::post('store', [DomainController::class, 'store'])->name('store');
    });
});
