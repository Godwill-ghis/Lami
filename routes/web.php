<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});
Route::get('/pricing', function () {
    return view('pages.pricing');
});

Route::name('auth.')->group(function () {
    Route::get('/signin', function () {
        return view('pages.auth.login');
    })->name('login');

    Route::get('/register', function (Request $request) {
        $plan = $request->input('plan');
        return view('pages.auth.register', ['plan' => $plan]);
    })->name('register');

    Route::post('/register', function (Request $request) {
        $plan = $request->input('plan');
        return view('pages.auth.register', ['plan' => $plan]);
    });
});
