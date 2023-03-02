<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Collaboration;
use Collator;
use Illuminate\Support\Facades\Storage;

class CollaborationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.collaboration.index', [
            'title' => 'Collaboration | Dashboard',
            'collaborations' => Collaboration::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.collaboration.create', [
            'title' => 'Collaboration | Dashboard'
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
            'url_to' => 'required',
            'image_url' => 'image|file|max:2048|required'
        ]);

        if ($request->file('image_url')) {
            $validatedData['image_url'] = $request->file('image_url')->store('collaboration-image');
        }

        Collaboration::create($validatedData);

        return redirect('/admin/collaborations')->with('success', 'Data collaboration has been Create');
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
        $collaboration = Collaboration::where('id', $id)->first();
        return view('admin.collaboration.edit', [
            'title' => 'Collaboration | Dashboard',
            'collaboration' => $collaboration
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
            'name' => 'required',
            'url_to' => 'required',
            'image_url' => 'image|file|max:2048'
        ]);

        if ($request -> file('image_url')) {
            if($request->old_image){
                Storage::delete($request->old_image);
            }
            $validatedData['image_url'] = $request->file('image_url')->store('collaboration-image');
        }

        Collaboration::where('id', $id)->update($validatedData);

        return redirect('/admin/collaborations')->with('success', 'Data user has been added');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $collaboration = Collaboration::where('id', $id)->first();
        if($collaboration->image_url){
            Storage::delete($collaboration->image_url);
        }
        Collaboration::destroy($collaboration->id);
        return redirect('/admin/collaborations')->with('danger', 'Data user has been deleted');
    }
}
