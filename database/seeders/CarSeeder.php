<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Car; // Import your Model

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Car::create([
            'make' => 'Toyota',
            'model' => 'Camry',
            'year' => 2022,
            'price' => 25000.00,
        ]);

        Car::create([
            'make' => 'Tesla',
            'model' => 'Model 3',
            'year' => 2023,
            'price' => 45000.00,
        ]);

        Car::create([
            'make' => 'Honda',
            'model' => 'Civic',
            'year' => 2021,
            'price' => 22000.00,
        ]);
    }
}