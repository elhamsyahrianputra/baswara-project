<?php

namespace Database\Seeders;

use App\Models\User;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
        $courses = [
            [
                'id' => Str::orderedUuid(),
                'author_id' => $user[0]->id,
                'name' => 'Dasar Pemrograman Python',
                'Description' => 'Pembelajaran yang berisi tentang dasar-dasar pemrograman python',
                'cover_url' => 'default-cover.jpg',
                'price' => 200000,
            ],
            [
                'id' => Str::orderedUuid(),
                'author_id' => $user[1]->id,
                'name' => 'Belajar Dasar Bahasa Indonesia',
                'Description' => 'Mempelajari dasar-dasar Bahasa Indonesia',
                'cover_url' => 'default-cover.jpg',
                'price' => 500000,
            ],
        ];

        DB::table('courses')->insert($courses);
    }
}
