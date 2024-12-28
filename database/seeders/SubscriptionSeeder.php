<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Subscription;

class SubscriptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Subscription::factory()->create([
            'name' => 'FREE',
            'price' => 0,
            'duration_unit' => 'month',
            'limit' => 10,
        ]);
        Subscription::factory()->create([
            'name' => 'BASIC',
            'price' => 5,
            'duration_unit' => 'month',
            'limit' => 30,
        ]);
        Subscription::factory()->create([
            'name' => 'PREMIUM',
            'price' => 15,
            'duration_unit' => 'month',
            'limit' => 0,
        ]);
    }
}
