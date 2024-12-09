<?php

use App\Http\Controllers\Auth\CheckoutController;
use App\Http\Controllers\Auth\EditorRegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
