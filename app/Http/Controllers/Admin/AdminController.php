<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Collaboration;
use App\Models\Course;
use App\Models\Post;

class AdminController extends Controller
{
    public function index() {
        return view('admin.dashboard.index', [
            'title' => 'Admin | Dashboard',
            'posts' => Post::count(),
            'courses' => Course::count(),
            'categories' => Category::count(),
            'collaborations' => Collaboration::count(),
        ]);
    }
}
