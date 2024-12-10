<?php

declare(strict_types=1);

namespace App\Services;

use App\Enums\UserRole;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use App\Services\ValidationService;
use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Session;

class RegistrationService
{


    public function registerUser(ValidationService $validator, Request $request): User
    {

        $userData = $validator->validateRegister($request);

        $user = User::create(
            [
                'name' => $userData['name'],
                'email' => $userData['email'],
                'password' => Hash::make($userData['password']),
                'role' => $userData['role']
            ]
        );

        event(new Registered($user));
        Auth::login($user);

        return $user;
    }

    // $userData['plan'] = (int) $userData['plan'];

    public function registerEditor($userData)
    {
        $user = User::create(
            [
                'name' => $userData['name'],
                'email' => $userData['email'],
                'password' => Hash::make($userData['password']),
                'role' => UserRole::EDITOR->value
            ]
        );

        //emmit register event for Email verifications

        event(new Registered($user));

        //login user

        Auth::login($user);

        //redirect user

        Session::put('message', 'Successfully Registered in as an Editor, your user name is: ' . $user->name);
        return;
    }
}
