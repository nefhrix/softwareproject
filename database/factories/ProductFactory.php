<?php

namespace Database\Factories;

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
            'name' => "amazon",
            'description' => "ubwuerwuhr9wehr9uwehruwher9uher",
            'price' => "123123",
            'image_url' => "bijieriejreir",
            'sustainability_attributes' => "ahhahahhs",
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
