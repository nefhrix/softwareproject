<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Business>
 */
class BusinessFactory extends Factory
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
            'description' => "abahahahahhaa",
            'category' => "something",
            'website' => "www.blahblah.com",
            'location' => "usa",
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
