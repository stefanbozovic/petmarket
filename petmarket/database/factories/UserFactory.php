<?php

namespace Database\Factories;

use \App\Models\User;
use \App\Models\Pet;
use \App\Models\Necklace;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

     public function definition()
     {  
         return [
             'username' => $this->faker->firstname(),
             'email' => $this->faker->email(),
             'password' => Str::random(8),
             'remember_token' => Str::random(10),
         ];
     }
   

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
