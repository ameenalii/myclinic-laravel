<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ListingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'patient_name' => $this -> faker ->name(),
            'age' =>$this->faker->numberBetween(10,100),
            'Email' => $this -> faker ->companyEmail(),
            'phone'=> $this -> faker ->phoneNumber(),
            'location'=> $this -> faker ->city(),
            'description'=> $this -> faker ->paragraph(),
        ];
    }
}
