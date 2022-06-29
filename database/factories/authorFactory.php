<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class authorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->name('Alvaro'),
            'email' => $this->faker->unique()->safeEmail(),
            'password' => $this->faker->sentence(),
            'comentario' => $this->faker->sentence(),
        ];
    }
}
