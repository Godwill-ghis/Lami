<?php

namespace App\Http\Controllers\Auth;

use App\Enums\UserRole;
use App\Http\Controllers\Controller;
use App\Services\RegistrationService;
use App\Services\ValidationService;
use Illuminate\Http\Request;

class EditorRegisterController extends Controller
{
    //

    public function index(Request $request)
    {
        return view('pages.editor.register');
    }

    public function store(Request $request, ValidationService $validator, RegistrationService $registrator)
    {
        // Validate in put

        $userData = $validator->validateEditorRegistration($request);

        // register user

        $registrator->registerEditor($userData);

        if (! $request->role === UserRole::EDITOR->value) {
            return back()->withErrors('role', 'Your are not an Editor');
        }

        return redirect()->route('verification.notice');
    }
}
