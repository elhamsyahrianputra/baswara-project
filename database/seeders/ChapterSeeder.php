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
        $courses = Course::all(['id']);

        Chapter::create([
            'course_id' => $courses[0]->id,
            'name' => 'Perkenalan Bahasa Pemrograman',
        ]);
        Chapter::create([
            'course_id' => $courses[0]->id,
            'name' => 'Bahasa Pemrograman Python',
        ]);
        Chapter::create([
            'course_id' => $courses[0]->id,
            'name' => 'Dasar Pemrograma Python',
        ]);
        Chapter::create([
            'course_id' => $courses[1]->id,
            'name' => 'Mengeja',
        ]);
    }
}
