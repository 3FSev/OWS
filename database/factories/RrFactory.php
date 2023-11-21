<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Rr>
 */
class RrFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'rr_number'=> $this->faker->unique()->numberBetween(10000, 99999),
            'rr_date' => now(),
            'supplier' => $this->faker->word,
            'address'=> $this->faker->word,
            'riv_number' => $this->faker->numberBetween(10000, 99999),
            'riv_date' => now(),
            'cs_number' => $this->faker->numberBetween(10000, 99999),
            'cs_date' => now(),
            'aoc_number' => $this->faker->numberBetween(10000, 99999),
            'aoc_date' => now(),
            'po_number' => $this->faker->numberBetween(10000, 99999),
            'po_date' => now(),
            'cv_number' => $this->faker->numberBetween(10000, 99999),
            'cv_date' => now(),
            'dr_number' => $this->faker->numberBetween(10000, 99999),
            'dr_date' => now(),
            'inv_number' => $this->faker->numberBetween(10000, 99999),
            'inv_date' => now(),
            'or_number' => $this->faker->numberBetween(10000, 99999),
            'or_date' => now(),
        ];
    }
}
