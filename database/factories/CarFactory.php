<?php

namespace Database\Factories;

use App\Models\Brand;
use App\Models\Kuzow;
use App\Models\Status;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'brand_id' => Brand::inRandomOrder()->first()->id,
            'color' => fake()->randomElement(['White', 'Gray', 'Black']),
            'status_id' => Status::inRandomOrder()->first()->id,
            'year' => fake()->numberBetween(2022, 2026),
            'transmission' => fake()->randomElement(['Automatic', 'Mechanic']),
            'motor' => fake()->randomFloat(1, 2, 5),
            'is_new' => fake()->boolean(70),
            'price' => fake()->numberBetween(15000, 150000),
            'description' => fake()->sentence(3),
        ];
    }
}
