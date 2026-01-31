<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\Brand_Model;
use App\Models\Car;
use App\Models\Color;
use App\Models\Kuzow;
use App\Models\Status;
use App\Models\Year;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Database\Factories\StudentFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        Brand::factory(100)->create();
        Brand_Model::factory(100)->create();
        Year::factory(10)->create();
        Kuzow::factory(4)->sequence(
            ['name' => 'Sedan'],
            ['name' => 'SUV'],
            ['name' => 'Coupe'],
            ['name' => 'Crossover'],
        )->create();
        Status::factory(3)->sequence(
            ['name' => 'Available'],
            ['name' => 'Sold'],
            ['name' => 'Being Repaired'],
        )->create();
        Car::factory(100)->create();
    }
}
