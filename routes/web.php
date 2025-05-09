<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommonController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [DashboardController::class, 'index'])->name('home');
Route::get('/get-company-data/{id}', [CommonController::class, 'getCompanyData']);
Route::post('/company-profile', [CommonController::class, 'companyProfile'])->name('company.profile');
Route::post('/personal-profile', [CommonController::class, 'personalProfile'])->name('personal.profile');