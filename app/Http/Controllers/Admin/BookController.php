<?php

namespace App\Http\Controllers\Admin;

use App\Models\Book;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use \Cviebrock\EloquentSluggable\Services\SlugService;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.book.index', [
            'title' => 'Book | Dashboard',
            'books' => Book::latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.book.create', [
            'title' => 'Book | Dashboard',
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
            'title' => 'required',
            'publisher' => 'required',
            'author' => 'required',
            'cover_url' => 'image|file|max:2048|required',
            'isbn' => 'required',
            'edition' => 'required',
            'published_at' => 'required',
            'pdf_url' => 'mimes:pdf|required'
        ]);
        
        
        $validatedData['slug'] = Str::slug($request['title']);

        if ($request->file('cover_url')) {
            $validatedData['cover_url'] = $request->file('cover_url')->store('books/book-cover');
        }

        if ($request->file('pdf_url')) {
            $validatedData['pdf_url'] = $request->file('pdf_url')->storeAs('books/book-file', $validatedData['slug'].'.pdf');
        }

        Book::create($validatedData);

        return redirect('/admin/books')->with('success', 'Data team has been update');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        return view('<admin class="book"></admin>edit', [
            'title' => 'Book | Dashboard',
            'book' => $book,

        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'publisher' => 'required',
            'author' => 'required',
            'cover_url' => 'image|file|max:2048',
            'isbn' => 'required',
            'edition' => 'required',
            'published_at' => 'required',
            'pdf_url' => 'mimes:pdf'
        ]);

        if ($request->file('cover_url')) {
            Storage::delete($request->old_image);
            $validatedData['cover_url'] = $request->file('cover_url')->store('books/book-cover');
        }

        if ($request->file('pdf_url')) {
            Storage::delete($request->old_file);
            $validatedData['pdf_url'] = $request->file('pdf_url')->store('books/book-file');
        }

        Book::find($book->id)->update($validatedData);

        return redirect('/admin/books')->with('success', 'Data team has been update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        Book::destroy($book->id);
        Storage::delete($book->pdf_url);
		return redirect('/admin/books')->with('success', 'Data theory has been deleted');
    }
    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Book::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }
}
