<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Property>
 */
class PropertyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
public function definition()
{
    $areas = [
        'Abdoun', 'Dabouq', 'Khalda', 'Shmeisani', 'Jubeiha',
        'Sweifieh', 'Deir Ghbar', 'Tlaa Al Ali', 'Marj Al Hamam',
        'Irbid', 'Zarqa', 'Salt', 'Aqaba'
    ];

    $types = [
        'Apartment', 'Villa', 'Penthouse', 'Studio', 'Duplex'
    ];

    $area = $this->faker->randomElement($areas);
    $type = $this->faker->randomElement($types);

    return [
        'property_name' => $area . ' ' . $type,
        'price' => $this->faker->numberBetween(60000, 450000),
        'details' => $this->faker->sentence(12),
        'category_id'=>Category::inRandomOrder()->first()->id,
       ];
}

}
