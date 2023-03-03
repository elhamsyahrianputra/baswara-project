<?php

namespace App\Http\Controllers\LandingPage;

use App\Models\Course;
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

    public function course($id)
    {
        $course = Course::find($id);

        return view('course', [
            'title' => "Course | Baswara",
            'course' => $course
        ]);
    }
    public function coursedefault()
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

    public function posts()
    {
        $title = '';
        // if (request('category')) {
        //     $category = Category::firstWhere('slug', request('category'));
        //     $title = 'in ' . $category->name;
        // }
        if (request('author')) {
            $author = \App\Models\User::firstWhere('id', request('author'));
            $title = $author->name;
        }
        return view('landing_page.posts', [
            "title" =>  $title,
            "active" => 'all_post',
            "posts" => \App\Models\Post::latest()->filter(request(['search_post', 'author']))->paginate(7)->withQueryString()
        ]);
        // return view('landing_page.posts', [
        //     'title' => "Info BIPA | Baswara",
        //     'teams' => \App\Models\Team::all(),
        // ]);
    }

    public function admin()
    {
        return view('', [
            'title' => "Admin Dashboard",
        ]);
    }
}
