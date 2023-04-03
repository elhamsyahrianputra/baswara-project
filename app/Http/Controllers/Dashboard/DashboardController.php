<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Course;
use Illuminate\Http\Request;
use App\Models\CourseStudent;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index() {

        $courses = auth()->user()->courses;
        return view('dashboard.index', [
            'title' => 'Dashboard | Baswara',
            'courses' => $courses
        ]);
    }

    public function learnCourse(Course $course) {
        return view('learning.index', [
            'title' => 'Learning',
            'course' => $course
        ]);
    }
}
