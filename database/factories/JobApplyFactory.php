<?php

namespace Database\Factories;

use App\Models\JobVacancy;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\JobApply>
 */
class JobApplyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'email' => fake()->email(),
            'phone' => fake()->phoneNumber(),
            'birthdate' => fake()->date(),
            'work_experience' => rand(1, 20),
            'job_vacancy_id' => function(){
                return JobVacancy::inRandomOrder()->first()->id;
            },
        ];
    }
}
