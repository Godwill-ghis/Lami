<?php

namespace App\Http\Controllers\Auth;

use App\Enums\UserPlan;
use App\Enums\UserRole;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Rule;

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
            'plan' => ['in:0,1,2', 'numeric'],
            'role' => ['required', 'string', Rule::enum(UserRole::class)]
        ]);

        $data['plan'] = (int) $data['plan'];

        if ($data['plan'] === UserPlan::BASIC->value || $data['plan'] === UserPlan::PREMIUM->value) {

            $user = User::create(
                [
                    'name' => $data['name'],
                    'email' => $data['email'],
                    'password' => Hash::make($data['password']),
                    'plan' => $data['plan'],
                    'role' => $data['role']
                ]
            );
            event(new Registered($user));
            Session::put(['plan' => $data['plan']]);
            return to_route('checkout');
        }

        $user = User::create(
            [
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
                'plan' => $data['plan'],
                'role' => $data['role']
            ]
        );

        event(new Registered($user));

        Auth::login($user);
        Session::put(['message' => 'successfully created an account for : ' . (Auth::user())->name]);
        return redirect()->route('verification.notice');
    }
}
