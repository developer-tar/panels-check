<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\UsersController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'dashboard', 'as' => 'admin.dashboard.'], function(){
    Route::get('/style-1', [DashboardController::class, 'index1'])->name('index1');
    Route::get('/style-2', [DashboardController::class, 'index2'])->name('index2');
    Route::get('/style-3', [DashboardController::class, 'index3'])->name('index3');
    Route::get('/style-4', [DashboardController::class, 'index4'])->name('index4');
    Route::get('/style-5', [DashboardController::class, 'index5'])->name('index5');
});
Route::group(['prefix' => 'user', 'as' => 'admin.user.'], function(){
    Route::get('/', [UsersController::class, 'index'])->name('index');
    Route::get('create', [UsersController::class, 'create'])->name('create');
    Route::get('{id}/edit', [UsersController::class, 'edit'])->name('edit');
});
