<?php

use App\Http\Controllers\DocumentationPageController;
use App\Http\Controllers\DocumentationPageSectionController;
use App\Http\Controllers\UserAccountController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return \Inertia\Inertia::render('Public/Landing');
})->name('landing');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia\Inertia::render('Dashboard');
})->name('dashboard');


/**
 * Authentication View Routes
 */
Route::get('/partner/login', function () {
    return \Inertia\Inertia::render('Auth/Login');
})->middleware(['guest'])->name('login');

Route::get('/partner/register', function () {
    return \Inertia\Inertia::render('Auth/Register');
})->middleware(['guest'])->name('register');

Route::get('/partner/email/verify', function () {
    if (Auth::user()->hasVerifiedEmail()) {
        return redirect(\App\Providers\RouteServiceProvider::HOME);
    }
    return \Inertia\Inertia::render('Auth/VerifyEmail');
})->middleware(['auth'])->name('verification.notice');

Route::get('/partner/forgot-password', function () {
    return \Inertia\Inertia::render('Auth/ForgotPassword');
})->middleware(['guest'])->name('password.request');

Route::get('/partner/password-reset-sent', function () {
    return \Inertia\Inertia::render('Auth/PasswordResetSent');
})->middleware(['guest']);

Route::get('/partner/reset-password/{token}', function (Request $request, $token) {
    return \Inertia\Inertia::render('Auth/ResetPassword', [
        'email' => $request['email'],
        'token' => $token,
    ]);
})->middleware(['guest'])->name('password.reset');

/**
 * Partner Portal
 */
Route::get('/partner/dashboard', function () {
    return \Inertia\Inertia::render('Partner/Dashboard');
})->middleware(['auth', 'verified']);

Route::get('/partner/account', [UserAccountController::class, 'show']);

/**
 * Public Documentation
 */
Route::get('/documentation', [DocumentationPageController::class, 'index']);
Route::get('/documentation/{page:slug}', [DocumentationPageController::class, 'show']);

/**
 * Partner Documentation Page
 */
Route::get('/partner/documentation', [DocumentationPageController::class, 'index'])
    ->name('partner.documentation.index');
Route::get('/partner/documentation/page/create', [DocumentationPageController::class, 'create']);
Route::get('/partner/documentation/page/{page}/edit', [DocumentationPageController::class, 'edit'])
    ->name('partner.documentation.edit');
Route::post('/partner/documentation/page', [DocumentationPageController::class, 'store']);
Route::put('/partner/documentation/page/{page}', [DocumentationPageController::class, 'update']);
Route::delete('/partner/documentation/page/{page}', [DocumentationPageController::class, 'destroy']);

/**
 * Partner Documentation Page Section
 */
Route::get('/partner/documentation/page/{page}/section/create', [DocumentationPageSectionController::class, 'create']);
Route::get('/partner/documentation/page/{page}/section/{section}/edit', [DocumentationPageSectionController::class, 'edit']);
Route::post('/partner/documentation/page/{page}/section', [DocumentationPageSectionController::class, 'store']);
Route::put('/partner/documentation/page/{page}/section/{section}', [DocumentationPageSectionController::class, 'update']);
Route::delete('/partner/documentation/page/{page}/section/{section}', [DocumentationPageSectionController::class, 'destroy']);


