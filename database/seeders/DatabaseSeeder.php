<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Subscription;
use App\Models\Tag;
use App\Models\User;
use App\Models\UserSubscription;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $subscriptions = Subscription::factory(3)->create();;
        $tags = Tag::factory(10)->create();

        //Published posts
        User::factory(5)
        ->for($subscriptions->random())
        ->has(Post::factory(10)
           ->published()
           ->afterCreating(function ($post) use ($tags) {
            $randomTags = $tags->random(3);
            $post->tags()->attach($randomTags->pluck('id'));
           })
        )->create();


        // Pending posts
        User::factory(10)
        ->for($subscriptions->random())
        ->has(Post::factory(10)
           ->pending()
           ->afterCreating(function ($post) use ($tags) {
            $randomTags = $tags->random(3);
            $post->tags()->attach($randomTags->pluck('id'));
        }))->create();

        // draft posts
        User::factory(10)
        ->for($subscriptions->random())
        ->has(Post::factory(10)
           ->draft()
           ->afterCreating(function ($post) use ($tags) {
            $randomTags = $tags->random(3);
            $post->tags()->attach($randomTags->pluck('id'));
        }))->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
