<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            
            /* We started adding code here */
            'contact_id' => random_int(100000,999999), // Generates a User from factory and extracts id
            'start_date' => $this->faker->dateTimeThisMonth(),
            'end_date' => $this->faker->dateTimeThisMonth(),
            'open' => random_int(100000,999999),
            'experience_id' => random_int(100000,999999),
            'no_vacancies' => random_int(100000,999999),
            'description' => $this->faker->sentence // Generates a fake sentence
            /* We ended adding code here */
        ];
    }
}
