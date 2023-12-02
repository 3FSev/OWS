<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Item>
 */
class ItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->word,
            'description' => $this->faker->sentence,
            'item_status_id' => 1,
            'quantity' => 1,
            'category_id' => $this->faker->numberBetween(1,7),
            'unit_cost' => $this->faker->numberBetween(1,50000),
            'freight'=> $this->faker->numberBetween(1,5000),
            'extended_cost'=> $this->faker->numberBetween(1,5000),
        ];
    }
}
