<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
        $title = fake()->unique()->sentence;
        $slug = Str::slug($title);

        return [
            'title' =>$title,
            'slug' =>$slug,
            'excerpt' => fake()->paragraphs(2, true),
            'body' => fake()->paragraphs(8, true),
            'user_id' => User::inRandomOrder()->value('id'),
        ];
    }
}
