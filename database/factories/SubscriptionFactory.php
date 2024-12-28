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
            'name' => $this->faker->unique()->randomElement([UserPlan::FREE->name, UserPlan::BASIC->name, UserPlan::PREMIUM->name]),
            'price' => function (array $attributes) {
                return $attributes['name'] === UserPlan::FREE->name ? 0.00 : ($attributes['name'] === UserPlan::BASIC->name ? 5.00 : 15.00);
            },
            'duration_unit' => 'month',
            'limit' => function(array $attributes) {
                return $attributes['name'] === UserPlan::FREE->name ? 10 : ($attributes['name'] === UserPlan::BASIC->name ? 30 : 0);
            }
        ];
    }
}

