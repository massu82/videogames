<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Game>
 */
class GameFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->unique()->word(),
            'levels' => $this->faker->numberBetween(1, 100),
            'release' => $this->faker->date(),
            'image' => $this->faker->imageUrl(640, 480, 'games'),
        ];
    }
}
