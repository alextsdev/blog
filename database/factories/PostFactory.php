<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
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
        return [

            'title' => fake()->name(),
            'body' => fake()->paragraph(),
            'published_at' => random_int(0, 2)
            ? $this->faker->dateTimeBetween('-1 years', '+1 years')
            : null,
        ];
    }
}

