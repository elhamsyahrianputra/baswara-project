<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User
        $this->call([
            UserSeeder::class
        ]);

        // Learning
        $this->call([
            CategorySeeder::class,
            CourseSeeder::class,
            CourseCategorySeeder::class,
            CourseStudentSeeder::class,
            ChapterSeeder::class,
            TheorySeeder::class,
            TeamSeeder::class
        ]);

        // // Team
        // $this->call([
        //     TeamSeeder::class,
        // ]);
        
        
        
    }
}
