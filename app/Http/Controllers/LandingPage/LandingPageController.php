<?php

namespace App\Http\Controllers\LandingPage;

use Illuminate\Http\Request;
use App\Models\Collaboration;
use App\Http\Controllers\Controller;

class LandingPageController extends Controller
{
    public function home()
    {
        return view('landing_page.home', [
            'title' => "Home | Baswara",
            'collaborations' => Collaboration::all()
        ]);
    }

    public function course()
    {
        return view('landing_page.course', [
            'title' => "Course | Baswara",
        ]);
    }

    public function courses()
    {
        $courses = \App\Models\Course::all();
        $categories = \App\Models\Category::all();

        return view('landing_page.courses', [
            'title' => "Courses | Baswara",
            'courses' => $courses,
            'categories' => $categories,
        ]);
    }

    public function contacts()
    {
        return view('landing_page.contacts', [
            'title' => "Home | Baswara",
        ]);
    }

    public function team()
    {
        return view('landing_page.team', [
            'title' => "Team | Baswara",
            'teams' => \App\Models\Team::all(),
        ]);
    }

    public function admin()
    {
        return view('', [
            'title' => "Admin Dashboard",
        ]);
    }
}
