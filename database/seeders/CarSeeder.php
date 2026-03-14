<?php

namespace Database\Seeders;

//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarSeeder extends Seeder
{

public function run(): void
{
    // \App\Models\Car::create([
    //     'name' => 'Tesla Model 3',
    //     'color' => 'White',
    //     'image' => 'tesla.jpg',
    //     'price_per_day' => 150.00
    // ]);

    \App\Models\Car::create([
        'name' => 'Toyota Camry',
        'color' => 'Black',
        'image' => 'camry.jpg',
        'price_per_day' => 50.00
    ]);
    \App\Models\Car::create([
        'name' => 'Sharon',
        'color' => 'green',
        'image' => 'sharon.png',
        'price_per_day' => 50.00
    ]);
    \App\Models\Car::create([
        'name' => 'Golf',
        'color' => 'blue',
        'image' => 'golf.png',
        'price_per_day' => 500.00
    ]);
    \App\Models\Car::create([
        'name' => 'Peugeot 406',
        'color' => 'grey',
        'image' => 'peugeot 406.png',
        'price_per_day' => 50.00
    ]);
    \App\Models\Car::create([
        'name' => 'Mercedes C230',
        'color' => 'gray',
        'image' => 'mercedes c230.png',
        'price_per_day' => 50.00
    ]);
    \App\Models\Car::create([
        'name' => 'Toyota Corolla',
        'color' => 'White',
        'image' => 'corolla.png',
        'price_per_day' => 50.00
    ]);
}
}
