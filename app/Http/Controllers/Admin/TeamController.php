<?php

namespace App\Http\Controllers\Admin;

use App\Models\Team;
use Illuminate\Support\Str;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams = Team::all();

        return view('admin.team.index', [
            'title' => 'Team | Dashboard',
            'teams' => $teams,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.team.create', [
            'title' => 'Teams | Dashboard'
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
            'division' => 'required',
            'biography' => 'required',
            'instagram_url' => 'required',
            'linkedin_url' => 'required',
            'email_url' => 'email:dns|required',
            'image_url' => 'image|file|max:2048|required'
        ]);
        
        $validatedData['instagram_url'] = Str::replace('https://', '', $request['instagram_url']);
        $validatedData['linkedin_url'] = Str::replace('https://', '', $request['linkedin_url']);

        if ($request->file('image_url')) {
            $validatedData['image_url'] = $request->file('image_url')->store('team-image');
        }

        Team::create($validatedData);

        return redirect('/admin/teams')->with('success', 'Data team has been update');
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
        $team = Team::where('id', $id)->first();

        return view('admin.team.edit', [
            'title' => 'Team | Dashboard',
            'team' => $team,
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
            'division' => 'required',
            'biography' => 'required',
            'instagram_url' => 'required',
            'email_url' => 'required',
            'linkedin_url' => 'required',
            'image_url' => 'image|file|max:2048|'
        ]);

        if ($request->file('image_url')) {
            Storage::delete($request->old_image);
            $validatedData['image_url'] = $request->file('image_url')->store('team-image');
        }

        Team::where('id', $id)->update($validatedData);

        return redirect('/admin/teams')->with('success', 'Data team has been update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Team $team)
    {
        Team::destroy($team->id);
        Storage::delete($team->image_url);
		return redirect('/admin/teams')->with('success', 'Data team has been deleted');
    }
}
