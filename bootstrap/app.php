<?php

use App\Http\Middleware\PreventVerifiedUsers;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Http\Request;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        //
        $middleware->alias(['unVerified' => PreventVerifiedUsers::class]);
        $middleware->redirectGuestsTo(fn(Request $request) => route('auth.login'));
        $middleware->redirectUsersTo(fn(Request $request) => $request->user()->role === 'subscriber' || $request->user()->role === 'subscriber' ? route('home') : route('admin'));
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
