<?php

namespace App\Http\Controllers;

use App\Enums\UserPlan;
use App\Http\Controllers\Controller;
use App\Services\StripeService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function index(Request $request)
    {
        if ($request->user()->userSubscription->is_active || $request->user()->subscription->name === UserPlan::FREE->name) {
            return redirect()->route('home');
        }

        $userPlan = $request->user()->subscription;

        return view('pages.checkout', ['plan' => $userPlan]);
    }

    public function checkout(StripeService $stripeService)
    {
        $user = Auth::user();
        $stripeService->addPaymentInformation($user);
    }
    public function success(Request $request, StripeService $stripeService)
    {
        $user = Auth::user();
        return $stripeService->makePayment($request, $user);
    }
}
