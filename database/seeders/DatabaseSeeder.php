<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Client;
use App\Models\City;
use App\Models\Student;
use App\Models\Courses;
// use App\Models\CourseStudent;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run() : void
    {
        User::factory(20)->create();
        City::factory(20)->create();
        Client::factory(20)->create();
        $students = Student::factory()->count(50)->create();
        $courses = Courses::factory()->count(30)->create();
        $students->each(function ($student) use ($courses) {
            $student->courses()->attach($courses->random(rand(1, 3))->pluck('id'));
        });
     


        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
