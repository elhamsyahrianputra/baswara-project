<?php

namespace Database\Seeders;

use App\Models\Course;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
        $courses = [
            [
                'id' => Str::orderedUuid(),
                'course_id' => $courses[0]->id,
                'name' => 'Perkenalan Bahasa Pemrograman',
            ],
            [
                'id' => Str::orderedUuid(),
                'course_id' => $courses[0]->id,
                'name' => 'Bahasa Pemrograman Python',
            ],
            [
                'id' => Str::orderedUuid(),
                'course_id' => $courses[0]->id,
                'name' => 'Dasar Pemrograma Python',
            ],
            [
                'id' => Str::orderedUuid(),
                'course_id' => $courses[1]->id,
                'name' => 'Mengeja',
            ],
        ];

        DB::table('chapters')->insert($courses);
    }
}
