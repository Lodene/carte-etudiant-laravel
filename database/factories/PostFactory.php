<?php

namespace Database\Factories;

use App\Models\Entreprise;
use Illuminate\Database\Eloquent\Factories\Factory;



class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'text' => $this->faker->text(),
            'email' => $this->faker->unique()->safeEmail(),
            'updated_at' => $this->faker->dateTimeBetween(2, now()),
            'created_at'=>$this->faker->dateTimeBetween('-20 days', now()),
            'level' => $this->faker->numberBetween(0,10),
            'reduction' => $this->faker->text(),
            'level' => $this->faker->numberBetween(4,6)

        ];
    }
}