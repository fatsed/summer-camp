<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Travel>
 */
class TravelFactory extends Factory
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
            'TravelAddress'=>fake()->address(),
            'price'=>fake()->randomNumber(),
            'discount_trip'=>fake()->numberBetween(min(5), max(100)),
            'it_takes_day'=>fake()->numberBetween(min(1), max(30)),
            'departure_date'=>fake()->time(),
            'TravelPicture'=>fake()->image(),
        ];
    }
}
