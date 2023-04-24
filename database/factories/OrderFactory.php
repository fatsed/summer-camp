<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'UserId'=>fake()->randomNumber(),
            'TravelId'=>fake()->randomNumber(),
            'genderName'=>fake()->randomElement($array = array ('male', 'female','another')) ,
            'price'=>fake()->randomNumber(),
            'tracking code'=>fake()->postcode(),
        ];
    }
}
