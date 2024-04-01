<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->title(),
            'teacher_id' => random_int(1, 5),
            'start_time' => $this->faker->randomElement(['07:30', '08:00', '09:00', '01:30']),
            'end_time' => $this->faker->randomElement(['09:30', '10:0', '11:00', '03:00']),
            'days_of_week' => $this->faker->randomElement(['mon', 'tue', 'wed', 'thu', 'fri']),
        ];
    }
}
