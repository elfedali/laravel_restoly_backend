<?php

namespace Database\Factories;

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
        return [
            /*  'name' => $this->faker->word,
            'position' => $this->faker->numberBetween(1, 10),
            'is_active' => $this->faker->boolean(),
            'locale' => $this->faker->randomElement(['en', 'fr', 'ar']), */];
    }
}
