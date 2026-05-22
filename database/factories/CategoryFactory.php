<?php

namespace Database\Factories;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
public function definition(): array
{
    $categories = ['Sale', 'Rent', 'Lease', 'Short-Term', 'Vacation'];
    
    $name = $this->faker->randomElement($categories);

    return [
        'name' => $name,
        'description' => $this->faker->sentence(12),
    ];
}

}
