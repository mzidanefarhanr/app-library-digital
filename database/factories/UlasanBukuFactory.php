<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UlasanBuku>
 */
class UlasanBukuFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => rand(1, 50),
            'buku_id' => rand(1, 50),
            'review' => fake()->streetName(),
            'rating' => rand(1, 5),
        ];
    }
}
