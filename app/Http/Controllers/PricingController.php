<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Subscription;
use App\Models\UserSubscription;
use Illuminate\Http\Request;

class PricingController
{
    public function index(Request $request)
    {
        if (!$request->user()) {
            return view('pages.pricing');
        }

        return redirect()->route('checkout');
    }
}
