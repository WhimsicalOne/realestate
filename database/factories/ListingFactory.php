<?php

namespace Database\Factories;

use App\Models\Category;
use Database\Factories\AgentFactory;
use Database\Factories\CategoryFactory;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Listing>
 */
class ListingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $sqf = fake()->numberBetween(5000, 8000);
        $price = fake()->numberBetween(10000, 55000);
        $title = fake()->name();

        return [

            'title' => $title,
            'name' => $title,
            'description' => fake()->sentences(5, true),
            'sqf' => $sqf,
            'price_per_sqf' => intdiv($price, $sqf),
            'price' => fake()->numberBetween(10000, 55000),
            'rooms' => fake()->numberBetween(1, 4),
            'bathrooms' => fake()->numberBetween(1, 4),
            'address' => fake()->address(),
            'city' => fake()->city(),
            'zip' => null,
            'category_id' => fake()->numberBetween(1, 5),
            'type_id' => fake()->numberBetween(1, 3),
            'on_sale' => fake()->numberBetween(0, 1),
            'is_featured' => fake()->numberBetween(0, 1),

        ];
    }
}
