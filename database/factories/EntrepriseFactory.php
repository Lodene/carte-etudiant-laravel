<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EntrepriseFactory extends Factory{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'updated_at' => $this->faker->dateTimeBetween(2, now()),
            'created_at'=>$this->faker->dateTimeBetween('-20 days', now())

        ];
    }
}