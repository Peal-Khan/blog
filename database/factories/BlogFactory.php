<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog>
 */
class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(10),
            'slug' => fake()->slug(10),
            'body' => fake()->paragraph(5),
            'category' => fake()->word(),
            'status' => rand(0, 2),
            'user_id' => rand(1, 10),
            'thumbnail' => 'https://picsum.photos/700/700'
        ];
    }
}
