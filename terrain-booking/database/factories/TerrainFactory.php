<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Terrain>
 */
class TerrainFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
         return [
        'owner_id' => 1, // for now, make sure user with ID 1 exists
        'title' => fake()->sentence,
        'description' => fake()->paragraph,
        'price_per_hour' => fake()->randomFloat(2, 10, 100),
    ];
    }
}
