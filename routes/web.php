<?php

use App\Http\Controllers\AccountsController;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\CardsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\InvoicingController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PrivateTransferController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\SupportController;
use App\Http\Controllers\TradingController;
use App\Http\Controllers\TransactionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController; 
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

// Route::group(['prefix' => 'dashboard', 'as' => 'dashboard.'], function(){
//     Route::get('/style-1', [DashboardController::class, 'index1'])->name('index1');
//     Route::get('/style-2', [DashboardController::class, 'index2'])->name('index2');
//     Route::get('/style-3', [DashboardController::class, 'index3'])->name('index3');
//     Route::get('/style-4', [DashboardController::class, 'index4'])->name('index4');
//     Route::get('/style-5', [DashboardController::class, 'index5'])->name('index5');
// });

Route::group(['prefix' => 'accounts', 'as' => 'accounts.'], function(){
    Route::get('/bank-account', [AccountsController::class, 'bankAccount'])->name('bank.account');
    Route::get('/account-overview', [AccountsController::class, 'accountOverview'])->name('account.overview');
    Route::get('/account-details', [AccountsController::class, 'accountDetails'])->name('account.details');
    Route::get('/deposit-detail', [AccountsController::class, 'depositDetail'])->name('deposit.detail');
});

Route::group(['prefix' => 'cards', 'as' => 'cards.'], function(){
    Route::get('/overview', [CardsController::class, 'overview'])->name('overview');
    Route::get('/details', [CardsController::class, 'details'])->name('details');
});

Route::group(['prefix' => 'transaction', 'as' => 'transaction.'], function(){
    Route::get('/style-1', [TransactionController::class, 'style1'])->name('style1');
    Route::get('/style-2', [TransactionController::class, 'style2'])->name('style2');
    Route::get('/style-3', [TransactionController::class, 'style3'])->name('style3');
});

Route::group(['prefix' => 'payment', 'as' => 'payment.'], function(){
    Route::get('/overview', [PaymentController::class, 'overview'])->name('overview');
    Route::get('/providers', [PaymentController::class, 'providers'])->name('providers');
    Route::get('/exchange', [PaymentController::class, 'exchange'])->name('exchange');
    Route::get('/make-payment', [PaymentController::class, 'makePayment'])->name('make.payment');
});

Route::group(['prefix' => 'transfer', 'as' => 'transfer.'], function(){
    Route::get('/add-contact', [PrivateTransferController::class, 'addContact'])->name('add.contact');
    Route::get('/overview', [PrivateTransferController::class, 'overview'])->name('overview');
    Route::get('/make-transfer', [PrivateTransferController::class, 'makeTransfer'])->name('make.transfer');
    Route::get('/chat', [PrivateTransferController::class, 'chat'])->name('chat');
});

Route::group(['prefix' => 'invoicing', 'as' => 'invoicing.'], function(){
    Route::get('/add-new', [InvoicingController::class, 'addInvoicing'])->name('add.invoicing');
    Route::get('/style-1', [InvoicingController::class, 'style1'])->name('style1');
    Route::get('/style-2', [InvoicingController::class, 'style2'])->name('style2');
});

Route::group(['prefix' => 'trading', 'as' => 'trading.'], function(){
    Route::get('/style-1', [TradingController::class, 'style1'])->name('style1');
    Route::get('/style-2', [TradingController::class, 'style2'])->name('style2');
    Route::get('/style-3', [TradingController::class, 'style3'])->name('style3');
});

Route::group(['prefix' => 'reports', 'as' => 'reports.'], function(){
    Route::get('/style-1', [ReportController::class, 'style1'])->name('style1');
    Route::get('/style-2', [ReportController::class, 'style2'])->name('style2');
});

Route::group(['prefix' => 'settings', 'as' => 'settings.'], function(){
    Route::get('/profile', [SettingsController::class, 'profile'])->name('profile');
    Route::get('/security', [SettingsController::class, 'security'])->name('security');
    Route::get('/social-network', [SettingsController::class, 'socialNetwork'])->name('social.network');
    Route::get('/notification', [SettingsController::class, 'notification'])->name('notification');
    Route::get('/payment-limit', [SettingsController::class, 'paymentLimit'])->name('payment.limit');
});

Route::group(['prefix' => 'auth', 'as' => 'auth.'], function(){
    Route::get('/sign-up', [AuthenticationController::class, 'signUp'])->name('sign.up');
    Route::get('/sign-in', [AuthenticationController::class, 'signIn'])->name('sign.in');
    Route::get('/sign-in-qrcode', [AuthenticationController::class, 'signInQrcode'])->name('sign.in.qrcode');
    Route::get('/error', [AuthenticationController::class, 'error'])->name('error');
});

Route::group(['prefix' => 'support', 'as' => 'support.'], function(){
    Route::get('/help-center', [SupportController::class, 'helpCenter'])->name('help.center');
    Route::get('/privacy-policy', [SupportController::class, 'privacyPolicy'])->name('privacy.policy');
    Route::get('/contact-us', [SupportController::class, 'contactUs'])->name('contact.us');
});

Route::view('/components', 'components')->name('components');
