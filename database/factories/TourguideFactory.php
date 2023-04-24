<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tourguide>
 */
class TourguideFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'TourGuideName'=>fake()->name(),
            'TourGuideFamily'=>fake()->lastName(),
            'TourGuideImg'=>fake()->postcode(),
            'TourGuideAddress'=>fake()->address(),
            'TourGuideEmail'=>fake()->email(),
            'genderName'=>fake()->randomElement($array = array ('male', 'female','another')) ,
            'TourGuideAge'=>fake()->numberBetween(min(1), max(80)),
        ];
    }
}
