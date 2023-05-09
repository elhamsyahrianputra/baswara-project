<?php

namespace Database\Seeders;

use App\Models\Course;

use App\Models\Chapter;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ChapterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $course = Course::first();

        Chapter::create([
            'course_id' => $course->id,
            'name' => 'Perkenalan Bahasa Indonesia',
            'description' => 'Merupakan materi dari pembelajaran bahasa indonesia'
        ]);
    }
}
