<?php

namespace App\Http\Controllers\Admin;

use App\Models\Chapter;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ChapterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $chapters = Chapter::all();

        return view('admin.chapter.index', [
            'title' => 'Chapter | Dashboard',
            'chapters' => $chapters,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('admin.chapter.create', [
            'title' => 'Chapter | Dashboard',
            'course_id' => $request['course_id'],
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
            'name' => 'required',
            'description' => 'required',
        ]);

        $validatedData['course_id'] = $request['course_id'];

        Chapter::create($validatedData);

        return redirect('/admin/courses/'.$request['course_id'].'/edit#chapters')->with('success', 'Data chapter has been Added');
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
    public function edit(Chapter $chapter)
    {
        $chapter = Chapter::find($chapter->id);
        return view('admin.chapter.edit', [
            'title' => 'Chapter | Dashboard',
            'chapter' => $chapter,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Chapter $chapter)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        $validatedData['course_id'] = $chapter->course_id;

        Chapter::find($chapter->id)->update($validatedData);

        return redirect('/admin/courses/'.$chapter->course_id.'/edit#chapters')->with('success', 'Data chapter has been Added');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Chapter $chapter)
    {
        Chapter::destroy($chapter->id);
		return redirect('/admin/courses/'.$chapter->course_id.'/edit#chapters')->with('success', 'Data chapter has been deleted');
    }
}
