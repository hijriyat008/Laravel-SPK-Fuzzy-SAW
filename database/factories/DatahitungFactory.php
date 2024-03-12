<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class DatahitungFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'alternatif' => $this->faker->unique()->numerify('A####'),
            'c1' => $this->faker->randomFloat(),
            'c2' => $this->faker->randomFloat(),
            'c3' => $this->faker->randomFloat(),
            'dataset_id' => $this->faker->unique()->numberBetween(51, 100),

        ];
    }
}
