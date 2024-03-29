<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Category;
use App\Models\CourseCategory;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

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

        CourseCategory::create([
            'course_id' => $courses[0]->id,
            'category_id' => $categories[1]->id,
        ]);
    }
}
