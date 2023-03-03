<?php

namespace Database\Seeders;

use App\Models\User;

use App\Models\Course;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::all(['id']);
        Course::create([
            'author_id' => $user[1]->id,
            'name' => 'Belajar Dasar Bahasa Indonesia',
            'Description' => 'Mempelajari dasar-dasar Bahasa Indonesia',
            'cover_url' => 'course/course-cover/indonesia.jpeg',
            'price' => 500000,
        ]);
    }
}
