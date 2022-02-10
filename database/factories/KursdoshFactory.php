<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class KursdoshFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
           'name'=>$this->faker->name,
           'address'=>$this->faker->address,
           'phone number'=>$this->faker->e164PhoneNumber
        ];
    }
}
