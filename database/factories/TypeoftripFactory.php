<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Typeoftrip>
 */
class TypeoftripFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'TypeOfTripName'=>fake()->randomElement(['ABROAD', 'ABROAD','CAMPING ','CITY', 'ROAD','CRUISE ','GROUP TOUR', 'A GIRLS/GUYS','A SOLO TRIP','STAYCATION']),
        ];
    }
}
