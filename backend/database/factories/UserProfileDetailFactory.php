<?php

namespace Database\Factories;

use App\Models\ProfileType;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserProfileDetailFactory extends Factory
{
    public function definition()
    {
        return [
            'value' => $this->faker->word(),
            'profile_type_id' => ProfileType::inRandomOrder()->first()->id,
            'comment' => $this->faker->word(),
        ];
    }
}
