<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Services\ValidationService;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Events\UserLoggedIn;
use App\Models\User;
use App\Mail\UserLoggedIn as UserLoggedInMail;
use Illuminate\Support\Facades\Mail;

class LoginController extends Controller
{
    //

    public function create(): View
    {
        return view('pages.auth.login');
    }

    public function login(Request $request, ValidationService $validator)
    {

        $userData = $validator->validateLogin($request);


        if (Auth::attempt($userData)) {
            $request->session()->regenerate();

            Session::put(['message' => 'successfully Logged in: ' . (Auth::user())->name]);
            $user = User::find(Auth::id())->first();

            event(new UserLoggedIn($user));

            return redirect()->intended(route('home'));
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
