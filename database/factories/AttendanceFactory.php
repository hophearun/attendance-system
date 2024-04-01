<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Attendance>
 */
class AttendanceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'student_id' => random_int(1, 25),
            'course_id' => random_int(1, 5),
            'attendance_date' => date('Y-m-d'),
            'status' => random_int(0, 1),
        ];
    }
}
