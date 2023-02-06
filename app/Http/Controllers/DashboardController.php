<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CourseStudents;

class DashboardController extends Controller
{
    public function index() {

        // $courses = CourseStudents::where('student_id', auth()->user()->id)->get('course_id');
    
        return view('dashboard.index', [
            'title' => 'Dashboard',
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
