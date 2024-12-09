<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    //

    public function create(): View
    {
        return view('pages.auth.login');
    }

    public function login(Request $request)
    {
        $data = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'between:8,20'],
        ]);

        if (Auth::attempt($data)) {
            $request->session()->regenerate();

            Session::put(['message' => 'successfully Logged in: ' . (Auth::user())->name]);

            return redirect()->route('home');
        }

        return back()->withErrors(['email' => 'The email you provided did not match our record'])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return to_route('home');
    }
}