<?php

declare(strict_types=1);


return [
    'stripeSecret' => env('STRIPE_SECRET'),
    'stripeSuccess' => env('STRIPE_SUCCESS_URI'),
    'stripeCancel' => env('STRIPE_CANCEL_URL'),
    'stripeCurrency' => env('STRIPE_CURRENCY')
];
