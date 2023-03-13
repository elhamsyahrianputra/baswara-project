<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.post.index', [
            'title' => 'Post | Dashboard',
            'posts' => Post::latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.post.create', [
            'title' => 'Post | Dashboard',
            'authors' => User::all()
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
            'title'         => 'required|min:3|max:255',
            'slug'          => 'required|unique:posts',
            'image_url'         => 'image|file|max:2048',
            'user_id'       => 'required|exists:users,id',
            'body'          => 'required',
        ]);

        if ($request->file('image_url')) {
            $validatedData['image_url'] = $request->file('image_url')->store('post-image');
        }
        $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 200);

        Post::create($validatedData);

        return redirect('/admin/posts')->with('success', 'New Post has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('admin.post.show', [
            'title' => 'Post | Dashboard',
            'post' => $post
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('admin.post.edit', [
            'title' => 'Post | Dashboard',
            'post' => $post,
            'authors' => User::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $rules = [
            'title'         => 'required|min:3|max:255',
            'user_id'       => 'required',
            'image_url'     => 'image|file|max:2048',
            'body'          => 'required',
        ];

        if ($request->slug != $post->slug){
            $rules['slug'] = 'required|unique:posts';
        }
        else{
            $rules['slug'] = 'required';
        }

        $validatedData= $request->validate($rules);

        if ($request -> file('image_url')) {
            if($post->image_url){
                Storage::delete($post->image_url);
            }
            $validatedData['image_url'] = $request->file('image_url')->store('post-image');
        }

        $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 200);

        Post::where('id', $post->id)->update($validatedData);

        return redirect('/admin/posts')->with('warning', 'Post has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        if($post->image_url){
            Storage::delete($post->image_url);
        }
        Post::destroy($post->id);

        return redirect('/admin/posts')->with('danger', 'Post has been deleted!');
    }
    
    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Post::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }
}
