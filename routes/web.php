<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\ProfileController;

// Forgot Password Routes
Route::get('/forgot-password', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('/forgot-password', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('password/reset/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('password/reset', [ResetPasswordController::class, 'reset'])->name('password.update');

// Dashboard Route
Route::get('/', [DashboardController::class, 'index'])->middleware('auth')->name('welcome');

// licences
Route::get('/licence', function () {
    // Logic to retrieve user data or prepare for the account access page
    return view('licences'); // The view for the account access page
})->name('licences');

Route::get('/subscriptions', function () {
    return view('payment.subscription'); // Corrected view reference
})->name('subscription');

Route::get('/subscription-details', function () {
    return view('payment.subscription-details'); // Corrected view reference
})->name('subscription-details');

Route::get('/payment-history', function () {
    return view('payment.payment-history'); // Corrected view reference
})->name('payment-history');

Route::get('/refund-history', function () {
    return view('payment.refund-history'); // Corrected view reference
})->name('refund-history');

Route::get('/payment-method', function () {
    return view('payment.payment-method'); // Corrected view reference
})->name('payment-method');

Route::get('/templates', function () {
    return view('templates'); // Corrected view reference
})->name('templates');


// Registration and Login Routes
Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register.form');
Route::post('register', [RegisterController::class, 'register'])->name('register.submit');

Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login'])->name('login.submit');
Route::post('/logout', [\App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

// Profile Routes
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update');
});



Route::get('/account-access', function () {
    // Logic to retrieve user data or prepare for the account access page
    return view('account-sharing'); // The view for the account access page
})->name('account-sharing');



Route::get('/get-help', function () {
    // Logic to retrieve user data or prepare for the account access page
    return view('help'); // The view for the account access page
})->name('help');


Route::get('/request-access', function () {
    // Logic to retrieve user data or prepare for the account access page
    return view('account.request-access'); // The view for the account access page
})->name('request-access');



Route::get('/grant-access', function () {
    // Logic to retrieve user data or prepare for the account access page
    return view('account.grant-access'); // The view for the account access page
})->name('grant-access');


