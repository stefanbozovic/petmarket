<?php

namespace Database\Factories;


use \App\Models\User;
use \App\Models\Pet;
use \App\Models\Necklace;
use Illuminate\Database\Eloquent\Factories\Factory;

class PetFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'species' => $this->faker->word(),
            'breed' => $this->faker->word(),
            'nickname' => $this->faker->firstname(),
            'user_id' => User::factory(),
            
        ];
    }
}
