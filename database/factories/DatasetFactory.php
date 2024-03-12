<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DatasetFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->unique()->numberBetween(1, 143),
            'nama' => $this->faker->name(),
            'nim' => $this->faker->unique()->randomNumber(5, true),
            'jk' => 'L',
            'tempat_lahir' => $this->faker->state(),
            'tgl_lahir' => $this->faker->date('2000-m-d'),
            'alamat' => $this->faker->streetAddress(),
            'email' => $this->faker->unique()->Email(),
            'no_hp' => $this->faker->unique()->phoneNumber(),
        ];
    }
}
