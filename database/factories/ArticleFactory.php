<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'ArticlePicture'=>fake()->image(),
            'title'=>fake()->title(),
            'abstract'=>fake()->text(),
            'text'=>fake()->realText(),
            'time'=>fake()->time(),
            'writer'=>fake()->name(),
            'source'=>fake()->address(),
        ];
    }
}
