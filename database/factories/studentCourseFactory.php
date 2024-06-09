<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
// use App\Models\CourseStudent;

class studentCourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'student_id'=>fake()->numberBetween(1,10),
            'course_id'=>fake()->numberBetween(1,10),
        ];
    }
}
