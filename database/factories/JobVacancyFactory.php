<?php

namespace Database\Factories;

use App\Models\JobApply;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\JobVacancy>
 */
class JobVacancyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
           'title' => fake()->title(),
            'description' => fake()->company(),
            'salary' => fake()->randomNumber(),
            'user_id' => function(){
                return JobApply::inRandomOrder()->first()->id;
            },
        ];
    }
}
