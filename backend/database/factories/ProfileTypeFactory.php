<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProfileTypeFactory extends Factory
{
    public function definition()
    {
        return [
            'name' => $this->faker->word(),
            'comment' => $this->faker->word(),
        ];
    }
}
