<?php

namespace Database\Factories;

use App\Models\Supplier;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'model_name' => fake()->word(),
            'supplier_id' => Supplier::factory(),
            'category_id' => Category::factory(),
            'brand' => fake()->randomElement(['Dell', 'Samsung', 'Apple', 'Realme', 'OnePlus', 'Sony', 'JBL', 'Boots']),
            'price' => fake()->numberBetween(100, 5000)
        ];
    }
}
