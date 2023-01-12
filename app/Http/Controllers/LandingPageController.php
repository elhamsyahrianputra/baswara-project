<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function home()
    {
        return view('landing_page.index', [
            'title' => "Home | Baswara",
        ]);
    }
    public function courses()
    {
        return view('landing_page.courses', [
            'title' => "Courses | Baswara",
        ]);
    }
    public function contacts()
    {
        return view('landing_page.contacts', [
            'title' => "Home | Baswara",
        ]);
    }
}
