<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\Car;
use App\Models\Color;
use App\Models\Kuzow;
use App\Models\Status;
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

        Brand::factory(250)->create();
        Status::factory(3)->sequence(
            ['name' => 'Available'],
            ['name' => 'Sold'],
            ['name' => 'Being Repaired'],
        )->create();
        Car::factory(400)->create();
    }
}
