<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Enums\UserPlan;
use App\Models\Subscription;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Subscription>
 */
class SubscriptionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Subscription::class;
    protected $plan;
    public function definition(): array
    {
        return [
            'name' => $this->plan,
            'price' => $this->plan === UserPlan::FREE->name ? 0 : ($this->plan === UserPlan::BASIC->name ? 5 : 15),
            'duration_unit' => 'month',
            'limit' => $this->plan === UserPlan::FREE->name ? 10 : ($this->plan === UserPlan::BASIC->name ? 30 : 0),
        ];
    }
}

