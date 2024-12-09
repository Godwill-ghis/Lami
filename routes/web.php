<?php

use App\Http\Controllers\Auth\CheckoutController;
use App\Http\Controllers\Auth\EditorRegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

Route::get('/', function () {
    return view('pages.home');
})->name('home');
Route::get('/pricing', function () {
    return view('pages.pricing');
})->middleware(['guest'])->name('pricing');

Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout');
Route::post('/checkout', [CheckoutController::class, 'subscribe'])->name('checkout');

Route::name('auth.')->group(function () {
    Route::get('/signin', [LoginController::class, 'create'])->middleware(['guest'])->name('login');
    Route::post('/signin', [LoginController::class, 'login'])->middleware(['guest']);
    Route::delete('/signin', [LoginController::class, 'logout'])->middleware(['auth']);

    Route::get('/register', [RegisterController::class, 'create'])->name('register')->middleware(['guest']);
    Route::post('/register', [RegisterController::class, 'store'])->middleware(['guest']);
});

Route::get('/editor/register', [EditorRegisterController::class, 'index']);
Route::post('/editor/register', [EditorRegisterController::class, 'store']);

Route::get('/verify-email', function () {
    return view('pages.auth.verify-email');
})->middleware(['auth', 'unVerified'])->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    Session::put(['message' => 'Your Email: ' . $request->user()->email . ' is now verified']);
    return redirect()->route('home');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');
