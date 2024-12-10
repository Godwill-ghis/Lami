<?php

namespace App\Http\Controllers\Auth;

use App\Enums\UserPlan;

use App\Http\Controllers\Controller;
use App\Services\RegistrationService;
use App\Services\SubscriptionService;
use App\Services\ValidationService;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class RegisterController extends Controller
{
    public function create(Request $request): View
    {
        $plan = $request->input('plan');
        return view('pages.auth.register', ['plan' => $plan]);
    }

    public function store(Request $request, ValidationService $validator, RegistrationService $registrator, SubscriptionService $subscriber)
    {

        $user = $registrator->registerUser($validator, $request);

        $subscriptionName = $subscriber->subscribeUser($request, $user)['subscriptionName'];

        Session::put(['message' => 'successfully created an account for : ' . $user->name]);
        if ($subscriptionName === UserPlan::FREE->name) {
            return redirect()->route('verification.notice');
        }


        return redirect()->route('checkout');
    }
}
