<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function home()
    {
        return view('landing_page.home', [
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
