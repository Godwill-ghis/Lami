<?php

declare(strict_types=1);

namespace App\Services;

use App\Models\Payment;
use App\Models\Subscription;
use Illuminate\Http\Request;
use Stripe\StripeClient;

class StripeService
{
    protected $stripe;

    public function __construct(StripeClient $stripeClient)
    {
        $this->stripe = $stripeClient;
    }

    public function addPaymentInformation($user)
    {
        $stripe = $this->stripe;
        $planPrice = $user->subscription->price * 100;
        $product = isset($user->subscription->stripe_product_id) ? $stripe->products->retrieve($user->subscription->stripe_product_id) : null;
        $price = null;

        if (!$product) {
            $product = $stripe->products->create(['name' => $user->subscription->name]);

            $price = $stripe->prices->create([
                'unit_amount' => $planPrice,
                'currency' => config('stripe')['stripeCurrency'],
                'recurring' => ['interval' => 'month'],
                'product' => $product->id
            ]);
            Subscription::where('name', $user->subscription->name)->update(['stripe_product_id' => $product->id]);
            Subscription::where('name', $user->subscription->name)->update(['stripe_price_id' => $price->id]);
        }

        $customer = isset($user->stripe_customer_id) ? $stripe->customers->retrieve($user->stripe_customer_id) : null;
        if (!$customer) {
            $customer = $stripe->customers->create(['name' => $user->name, 'email' => $user->email]);
            $user->update(['stripe_customer_id' => $customer->id]);
        }

        $session = $stripe->checkout->sessions->create([
            'payment_method_types' => ['card'],
            'mode' => 'setup',
            'customer' => $customer->id,
            'success_url' => config('stripe')['stripeSuccess'] . '?session_id={CHECKOUT_SESSION_ID}',
            'cancel_url' => config('stripe')['stripeCancel']
        ]);

        header('HTTP/1.1 303');
        header('Location: ' . $session->url);
    }
    public function makePayment(Request $request, $user)
    {
        $stripe = $this->stripe;
        $userSubscription = isset($user->stripe_subscription_id) ? $stripe->subscriptions->retrieve($user->stripe_subscription_id) : null;

        if (!$userSubscription || $userSubscription->status !== 'active') {
            $sessionId = $request->query('session_id');
            $checkoutSession = $stripe->checkout->sessions->retrieve($sessionId);
            $setupIntent = $stripe->setupIntents->retrieve($checkoutSession->setup_intent);
            $paymentMethods = $stripe->paymentMethods->retrieve($setupIntent->payment_method);
            $paymentMethods->attach(['customer' => $setupIntent->customer]);
            $stripe->customers->update($setupIntent->customer, ['invoice_settings' => ['default_payment_method' => $paymentMethods->id]]);

            $price = $stripe->prices->retrieve($user->subscription->stripe_price_id);

            $subscription = $stripe->subscriptions->create(
                [
                    'customer' => $setupIntent->customer,
                    'items' => [[
                        'price' => $price->id
                    ]],
                    'default_payment_method' => $paymentMethods->id
                ]
            );

            $user->subscription->update(['is_active' => true, 'stripe_subscription_id' => $subscription->id]);

            $amountPaid = $subscription->plan->amount / 100;

            Payment::create([
                'user_id' => $user->id,
                'stripe_invoice_id' => $subscription->latest_invoice,
                'amount' => $amountPaid,
                'stripe_product_id' => $subscription->plan->product

            ]);
            return view('pages.success', ['subscription' => $user->subscription]);
        }

        return view('pages.success', ['message' => 'you already have an active subscription', 'subscription' => $user->subscription]);
    }
}
