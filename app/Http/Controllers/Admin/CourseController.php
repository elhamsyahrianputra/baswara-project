<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Course;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::all();

        return view('admin.course.index', [
            'title' => 'Course | Dashboard',
            'courses' => $courses,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $authors = User::all();
        $categories = Category::all();

        return view('admin.course.create', [
            'title' => 'Course | Dashboard',
            'authors' => $authors,
            'categories' => $categories,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'categories' => 'array',
            'categories.*' => [\Illuminate\Validation\Rule::exists('categories', 'id')],
            'name' => 'required',
            'author_id' => 'required|exists:users,id',
            'description' => 'required',
            'price' => 'required|integer',
            'cover_url' => 'image|file|max:2048|required'
        ]);

        if ($request->file('cover_url')) {
            $validatedData['cover_url'] = $request->file('cover_url')->store('course/course-cover');
        }

        $course = Course::create(
            \Illuminate\Support\Arr::except($validatedData, 'categories')
        );
    
        // Save categories
        $course->categories()->attach($validatedData['categories']);

        return redirect('/admin/courses')->with('success', 'Data course has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $authors = User::all();
        $course = Course::where('id', $id)->first();
        $categories = Category::all();    

        return view('admin.course.edit', [
            'title' => 'Course | Dashboard',
            'course' => $course,
            'authors' => $authors,
            'categories' => $categories,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'categories' => 'array',
            'categories.*' => [\Illuminate\Validation\Rule::exists('categories', 'id')],
            'name' => 'required',
            'author_id' => 'required|exists:users,id',
            'description' => 'required',
            'price' => 'required|integer',
            'cover_url' => 'image|file|max:2048'
        ]);

        if ($request->file('cover_url')) {
            Storage::delete($request->old_image);
            $validatedData['cover_url'] = $request->file('cover_url')->store('course/course-cover');
        }

        $course = Course::find($id);
        
        $course->update(
            \Illuminate\Support\Arr::except($validatedData, 'categories')
        );

        $course->categories()
            ->newPivotStatement()
            ->where('course_id', '=', $course->id)
            ->delete();
    
        // Save categories
        $course->categories()->attach($validatedData['categories']);

        return redirect('/admin/courses')->with('success', 'Data course has been update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Course::destroy($id);
		return redirect('/admin/courses')->with('success', 'Data course has been deleted');
    }
}
