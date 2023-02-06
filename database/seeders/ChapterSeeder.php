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
        $course1 = Course::where('name', 'Dasar Pemrograman Python')->first();
        $course2 = Course::where('name', 'Belajar Dasar Bahasa Indonesia')->first();

        Chapter::create([
            'course_id' => $course1->id,
            'name' => 'Perkenalan Bahasa Pemrograman',
        ]);
        Chapter::create([
            'course_id' => $course1->id,
            'name' => 'Bahasa Pemrograman Python',
        ]);
        Chapter::create([
            'course_id' => $course1->id,
            'name' => 'Dasar Pemrograma Python',
        ]);
        Chapter::create([
            'course_id' => $course2->id,
            'name' => 'Perkenalan Bahasa Indonesia',
        ]);
    }
}
