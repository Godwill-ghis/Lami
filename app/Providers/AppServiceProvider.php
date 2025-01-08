<?php

namespace App\Providers;

use app\Services\StripeService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use Stripe\StripeClient;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
        $this->app->singleton(StripeClient::class,  function (Application $app) {
            // / $stripeSecret = config('stripe')['stripeSecret'];
            // $this->stripe = new StripeClient($stripeSecret);
            return new StripeClient(config('stripe.stripeSecret'));
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
        Route::bind('tag', function ($value) {
            return \App\Models\Tag::firstOrFail();
        });
    }
}
