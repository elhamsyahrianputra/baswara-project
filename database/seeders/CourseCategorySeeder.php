<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Category;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $courses = Course::all(['id']);
        $categories = Category::all(['id']);

        $courseCategory = [
            [
                'course_id' => $courses[0]->id,
                'category_id' => $categories[0]->id,
            ],
            [
                'course_id' => $courses[1]->id,
                'category_id' => $categories[1]->id,
            ],
        ];

        DB::table('course_categories')->insert($courseCategory);
    }
}
