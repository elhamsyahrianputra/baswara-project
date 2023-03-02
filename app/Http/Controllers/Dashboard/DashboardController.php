<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Models\CourseStudent;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index() {

        $courses = CourseStudent::where('student_id', auth()->user()->id)->get('course_id');
    
        return view('dashboard.index', [
            'title' => 'Dashboard',
            'courses' => $courses
        ]);
    }

    public function learning() {
        $course = \App\Models\Course::all();
        return view('learning.index', [
            'title' => 'Learning',
            'course' => $course[0]
        ]);
    }
}
