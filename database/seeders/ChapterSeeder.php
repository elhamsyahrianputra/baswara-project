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
            'description' => 'Merupakan materi dari pemrograman python chapter 1'
        ]);
        Chapter::create([
            'course_id' => $course1->id,
            'name' => 'Bahasa Pemrograman Python',
            'description' => 'Merupakan materi dari pemrograman python chapter 2'
        ]);
        Chapter::create([
            'course_id' => $course1->id,
            'name' => 'Dasar Pemrograma Python',
            'description' => 'Merupakan materi dari pemrograman python chapter 3'
        ]);
        Chapter::create([
            'course_id' => $course2->id,
            'name' => 'Perkenalan Bahasa Indonesia',
            'description' => 'Merupakan materi dari pembelajaran bahasa indonesia'
        ]);
    }
}
