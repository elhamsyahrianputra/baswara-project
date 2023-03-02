<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\User;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseStudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $courses = Course::all(['id']);
        $students = User::all(['id']);

        $courseStudents = [
            [
                'course_id' => $courses[0]->id,
                'student_id' => $students[0]->id,
            ],
            [
                'course_id' => $courses[0]->id,
                'student_id' => $students[1]->id,
            ],
            [
                'course_id' => $courses[0]->id,
                'student_id' => $students[2]->id,
            ],
            [
                'course_id' => $courses[0]->id,
                'student_id' => $students[3]->id,
            ],
        ];

        DB::table('course_students')->insert($courseStudents);
    }
}
