<?php

namespace Database\Factories;

use App\Models\Brand;
use App\Models\Kuzow;
use App\Models\Status;
use App\Models\Year;
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
        $o_brand = Brand::inRandomOrder()->first();
        return [
            'brand_id' => $o_brand->name . " " . $o_brand->model_name,
            'kuzow' => Kuzow::inRandomOrder()->first()->name,
            'color' => fake()->randomElement(['White', 'Gray', 'Black']),
            'status_id' => Status::inRandomOrder()->first()->name,
            'year' => Year::inRandomOrder()->first()->year,
            'transmission' => fake()->randomElement(['Automatic', 'Mechanic']),
            'motor' => fake()->randomFloat(1, 2, 5),
            'is_new' => fake()->boolean(70),
            'price' => fake()->numberBetween(15000, 150000),
            'description' => fake()->sentence(3),
        ];
    }
}
