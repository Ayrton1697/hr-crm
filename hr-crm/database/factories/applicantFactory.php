<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class applicantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->name(),
            'email'=>$this->faker->email(),
            'phone'=>$this->faker->phoneNumber()
            //$table->file('cv');
        ];
    }
}
