<?php

namespace App\Http\Controllers\Auth;

use App\Enums\UserRole;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Rule;

class EditorRegisterController extends Controller
{
    //

    public function index(Request $request)
    {
        return view('pages.editor.register');
    }

    public function store(Request $request)
    {
        // Validate in put

        $request->validate(
            [

                'name' => 'required|between:4,12|alpha_num:ascii',
                'email' => 'email|required|unique:users,email',
                'password' => 'required|confirmed|between:8,20',
                'role' => ['required', 'string', Rule::enum(UserRole::class)],
            ]
        );

        // register user

        if (! $request->role === UserRole::EDITOR->value) {
            return back()->withErrors('role', 'Your are not an Editor');
        }

        $user = User::create(
            [
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'role' => UserRole::EDITOR->value
            ]
        );

        //login user

        Auth::login($user);

        //redirect user

        Session::put('message', 'Successfully Logged in a an Editor, your user name is: ' . $user->name);

        return redirect()->route('home');
    }
}
