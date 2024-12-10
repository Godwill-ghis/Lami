<?php

namespace App\Http\Middleware;

use App\Enums\UserPlan;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;

class PreventVerifiedUsers
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if ($request->user()->role === UserPlan::BASIC->value || $request->user()->role === UserPlan::PREMIUM->value) {
        }
        if (Auth::check() && $request->user()->hasVerifiedEmail()) {
            Session::put(['message' => 'Your Email : ' . $request->email . 'has Already been verified']);
            return redirect()->route('home');
        }
        return $next($request);
    }
}
