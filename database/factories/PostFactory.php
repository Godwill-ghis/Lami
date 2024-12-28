<?php

namespace Database\Factories;

use App\Models\Tag;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence,
            'content' => $this->faker->paragraphs(7, true),
            'slug' => $this->faker->slug,
            'image' => $this->faker->imageUrl(),
            'published_at' => now(),

        ];
    }

    /**
     * Indicate that the post is published.
     */
    public function published(): Factory{
        return $this->state(fn (array $attributes) => [
            'status' => 'published',
        ]);
    }

    /**
     * Indicate that the post is pending.
     */
    public function pending(): Factory{
        return $this->state(fn (array $attributes) => [
            'status' => 'pending',
        ]);
    }

    /**
     * Indicate that the post is draft.
     */

    public function draft(): Factory{
        return $this->state(fn (array $attributes) => [
            'status' => 'draft',
        ]);
    }
}
