<?php

use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\Auth\EditorRegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PricingController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

Route::get('/', [PostController::class, 'index'])->name('home');
Route::get('/tags/{tag:name}', [PostController::class, 'taggedPosts'])->name('tagged-posts');

Route::get('/pricing', [PricingController::class, 'index'])->name('pricing');



Route::name('auth.')->group(function () {
    Route::get('/signin', [LoginController::class, 'create'])->middleware(['guest'])->name('login');
    Route::post('/signin', [LoginController::class, 'login'])->middleware(['guest']);
    Route::delete('/signin', [LoginController::class, 'logout'])->middleware(['auth']);

    Route::get('/register', [RegisterController::class, 'create'])->name('register')->middleware(['guest']);
    Route::post('/register', [RegisterController::class, 'store'])->middleware(['guest']);
});

Route::middleware(['auth'])->group(
    function () {

        Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout');
        Route::post('/checkout', [CheckoutController::class, 'checkout']);

        Route::get('/success', [CheckoutController::class, 'success']);

        Route::get('/editor/register', [EditorRegisterController::class, 'index']);
        Route::post('/editor/register', [EditorRegisterController::class, 'store']);
    }
);


// Email varification Routes

Route::name('verification.')->group(
    function () {

        Route::get('/verify-email', function () {
            return view('pages.auth.verify-email');
        })->middleware(['auth', 'unVerified'])->name('notice');

        Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
            $request->fulfill();

            Session::put(['message' => 'Your Email: ' . $request->user()->email . ' is now verified']);
            return redirect()->route('home');
        })->middleware(['auth', 'signed'])->name('verify');

        Route::post('/email/verification-notification', function (Request $request) {
            $request->user()->sendEmailVerificationNotification();

            return back()->with('message', 'Verification link sent!');
        })->middleware(['auth', 'throttle:6,1'])->name('send');
    }
);