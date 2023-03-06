<?php

namespace App\Http\Controllers\LandingPage;

use App\Models\Course;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Team;
use App\Models\User;
use App\Models\Collaboration;
use App\Http\Controllers\Controller;

class LandingPageController extends Controller
{
    public function home()
    {
        return view('landing_page.home', [
            'title' => "Home | Baswara",
            'collaborations' => Collaboration::all(),
            'courses' => Course::orderBy('id','desc')->take(3)->get(),
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
            'teams' => Team::all(),
        ]);
    }

    public function posts()
    {
        $title = '';
        if (request('author')) {
            $author = User::firstWhere('id', request('author'));
            $title = $author->name;
        }
        return view('landing_page.posts', [
            "title" =>  $title,
            "posts" => Post::latest()->filter(request(['search_post', 'author']))->paginate(7)->withQueryString()
        ]);
    }

    public function single_post(Post $post)
    {
        return view('landing_page.post', [
            "title" => 'Info BIPA | Baswara',
            "post"  => $post,
            "posts" => Post::latest()->where('id', '!=', $post->id)->where('user_id', $post->user_id)->take(3)->get(),
            "recommends" => Post::latest()->where('id', '!=', $post->id)->get()->random(2)
        ]);
    }

    public function admin()
    {
        return view('', [
            'title' => "Admin Dashboard",
        ]);
    }
}
