<?php

namespace Database\Factories;

use App\Models\User;
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
            'title' => $this->faker->sentence(),
            'slug' => $this->faker->slug(),
            'body' => $this->faker->paragraph(),
            'duration' => $this->faker->randomDigit(),
            'published'=> rand(0, 1),
            'views' => rand(0,10000000),
            'author_id' => User::inRandomOrder()->first()->id,
            'banner'=> $this->faker->imageUrl(),
        ];
    }
}
