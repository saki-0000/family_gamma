<?php

namespace Database\Factories;

use App\Models\informationType;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserInformationDetailFactory extends Factory
{
    public function definition()
    {
        return [
            'value' => $this->faker->word(),
            'information_type_id' => informationType::inRandomOrder()->first()->id,
            'comment' => $this->faker->word(),
        ];
    }
}
