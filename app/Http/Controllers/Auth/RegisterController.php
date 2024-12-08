<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class RegisterController extends Controller
{
    public function create(Request $request): View
    {
        $plan = $request->input('plan');
        return view('pages.auth.register', ['plan' => $plan]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => ['required', 'between:4,12', 'alpha_num:ascii'],
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => ['required', 'confirmed', 'between:8,20'],
            'plan' => ['in:0,1,2', 'numeric']
        ]);

        $data['plan'] = (int) $data['plan'];

        if ($data['plan'] === 1 || $data['plan'] === 2) {

            Session::put(['plan' => $data['plan']]);
            return to_route('checkout');
        }

        $user = User::create(
            [
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => $data['password'],
                'plan' => $data['plan']
            ]
        );

        Auth::login($user);
        Session::put(['message' => 'successfully created an account for : ' . (Auth::user())->name]);
        return redirect()->route('home');
    }
}
