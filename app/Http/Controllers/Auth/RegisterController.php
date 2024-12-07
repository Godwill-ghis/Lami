<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //

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

        // dd($data);

        $data['plan'] = (int) $data['plan'];

        //register the user

        // Return the user to a checkout page if the user plan is basic(1) or premium(2)

        if ($data['plan'] === 1 || $data['plan'] === 2) {

            return to_route('checkout', ['plan' => $data['plan']]);
        }

        return "successfully Logged in";
        // return to_route('home');
    }
}
