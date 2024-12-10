<?php

declare(strict_types=1);

namespace App\Services;

use Illuminate\Validation\Rule;
use App\Enums\UserRole;

class ValidationService
{

    public function validateRegister($request): array
    {
        $data = $request->validate([
            'name' => ['required', 'between:4,12', 'alpha_num:ascii'],
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => ['required', 'confirmed', 'between:8,20'],
            'plan' => ['in:0,1,2', 'numeric'],
            'role' => ['required', 'string', Rule::enum(UserRole::class)]
        ]);


        return $data;
    }

    public function validateEditorRegistration($request)
    {

        $data = $request->validate([
            'name' => 'required|between:4,12|alpha_num:ascii',
            'email' => 'email|required|unique:users,email',
            'password' => 'required|confirmed|between:8,20',
            'role' => ['required', 'string', Rule::enum(UserRole::class)],
        ]);

        return $data;
    }

    public function validateLogin($request): array
    {
        $data = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'between:8,20'],
        ]);

        return $data;
    }
}
