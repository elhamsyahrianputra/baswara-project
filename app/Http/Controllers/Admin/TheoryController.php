<?php

namespace App\Http\Controllers\Admin;

use App\Models\Theory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class TheoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('admin.theory.create', [
            'title' => 'Theory | Dashboard',
            'chapter_id' => $request['chapter_id']
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
            'speaker' => 'required',
            'description' => 'required',
            'video_url' => 'required|mimetypes:video/avi,video/mpeg,video/quicktime,video/mp4',
        ]);

        if ($request->file('video_url')) {
            $validatedData['video_url'] = $request->file('video_url')->store('theory-video');
        }

        $validatedData['chapter_id'] = $request['chapter_id'];

        Theory::create($validatedData);

        return redirect('/admin/chapters/'.$request['chapter_id'].'/edit#theory')->with('success', 'Data theory has been Added');
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
        $theory = Theory::find($id);
        return view('admin.theory.edit', [
            'title' => 'Theory | Dashboard',
            'theory' => $theory,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Theory $theory)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'speaker' => 'required',
            'description' => 'required',
            'video_url' => 'required|mimetypes:video/avi,video/mpeg,video/quicktime'
        ]);

        if ($request->file('video_url')) {
            $validatedData['video_url'] = $request->file('video_url')->store('theory-video');
        }

        Theory::create($validatedData);

        return redirect('/admin/chapters/'.$theory->chapter_id.'/edit#theory')->with('success', 'Data theory has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Theory $theory)
    {
        Theory::destroy($theory->id);
        Storage::delete($theory->video_url);
		return redirect('/admin/categories')->with('success', 'Data theory has been deleted');
    }
}
