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
        $cars = [
            "Toyota" => ["Avalon", "Camry", "Corolla", "Crown", "Grand Highlander", "Highlander", "Land Cruiser", "Prado", "RAV4", "Sienna", "Yaris"],
            "Lexus" => ["ES 250", "ES 300", "ES 350", "IS 300", "IS 350", "LS 400", "LS 500", "LX 450", "LX 570", "RX 350"],
            "Mercedes-Benz" => ["400E", "AMG GT", "C250", "C300", "C350", "C43 AMG", "E300", "E350", "ML350", "ML400", "Maybach GLS", "S-Class", "R-Class", "SL-Class"],
            "BMW" => ["M4", "M5", "M6", "M8", "M8 Gran Coupe", "X1", "X2", "X5", "X6", "X7", "Z4", "i7", "i8"],
            "Hyundai" => ["Elantra", "Sonata", "Mufasa", "NEXO", "Santa Fe", "Tucson", "Venue"],
            "Genesis" => ["G70", "G80", "G90", "GV 60", "GV 70", "GV 80"],
            "KIA" => ["K3", "K5", "K7", "Sorento", "Sportage", "Stinger", "Telluride"],
            "Audi" => ["A4", "A5", "Q3", "Q5", "Q7", "Q8", "RS6", "SQ8", "TT RS"],
        ];

        $brand = fake()->randomElement(array_keys($cars));
        $model = fake()->randomElement($cars[$brand]);
        return [
            'brand' => $brand,
            'model' => $model,
            'kuzow' => Kuzow::inRandomOrder()->first()->name,
            'color' => fake()->randomElement(['White', 'Gray', 'Black']),
            'status_id' => Status::inRandomOrder()->first()->name,
            'year' => Year::inRandomOrder()->first()->year,
            'transmission' => fake()->randomElement(['Automatic', 'Mechanic']),
            'drive' => fake()->randomElement(['AWD', 'FWD', '4WD', 'RWD']),
            'motor' => fake()->randomFloat(1, 2, 5),
            'is_new' => fake()->boolean(70),
            'price' => fake()->numberBetween(15000, 150000),
            'description' => fake()->sentence(3),
        ];
    }
}
