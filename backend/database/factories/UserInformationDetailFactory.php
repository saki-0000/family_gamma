<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserinformationDetailFactory extends Factory
{
    public function definition()
    {
        return [
            'value' => $this->faker->word(),
            'information_type' => $this->faker->word(),
            'comment' => $this->faker->word(),
        ];
    }
}
