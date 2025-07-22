<?php

// database/factories/BookFactory.php
namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(3), // Judul dari 3 kata
            'author' => fake()->name(),
            'stock' => fake()->numberBetween(5, 20), // Stok awal antara 5 sampai 20
        ];
    }
}
