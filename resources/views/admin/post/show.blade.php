@extends('layouts.admin')

@section('content')
    <!-- Content Wrapper -->
    <div id="main-content">
        <div class="page-heading">
            <div class="page-title">
                <div class="row">
                    <div class="col-12 col-md-6 order-md-1 order-last">
                        <h3>Add Post</h3>
                    </div>
                    <div class="col-12 col-md-6 order-md-2 order-first">
                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/admin">Admin</a></li>
                                <li class="breadcrumb-item"><a href="/admin/posts">Post</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Show</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="container-fluid">
                <!-- row -->
                <div class="row justify-content-center">
                    <!-- col -->
                    <div class="col-md-11">
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <div class="container col-10 my-3 p-3">
                                <article>
                                    <h2 class="text-center">{{ $post->title }}</h2>
                        
                                    <h5 class="text-center">By
                                        <a class="text-decoration-none">{{ $post->author->name }}</a>
                                    </h5>
                                    <div class="container col-8">
                                        @if ($post->image_url)
                                            <img class="img-fluid img-thumbnail" src="/storage/{{ $post->image_url }}" alt="">
                                        @else
                                            <img class="img-fluid img-thumbnail" src="https://source.unsplash.com/random/400×600/?education" alt="">
                                        @endif
                                    </div>
                                    <article class="my-3">
                                        {!! $post->body !!}
                                    </article>
                                    <div class="row">
                                        <div class="col-4">
                                            <a href="/admin/posts" class="btn btn-outline-success d-flex justify-content-center col-12">
                                                <i class="bi bi-arrow-bar-left mx-2"></i>
                                                Back to all posts
                                            </a>
                                        </div>
                                        <div class="col-4">
                                            <a href="/admin/posts/{{ $post->slug }}/edit" class="btn btn-outline-warning d-flex justify-content-center col-12">
                                                <i class="bi bi-pencil-square mx-2"></i>
                                                Edit
                                            </a>
                                        </div>
                                        <form action="/admin/posts/{{ $post->slug }}" method="POST" class="d-inline col-4">
                                            @method('delete')
                                            @csrf
                                            <button class="btn btn-outline-danger d-flex justify-content-center col-12"
                                                onclick="return confirm('Are you sure?')">
                                                <i class="bi bi-trash-fill mx-2"></i>
                                                Hapus
                                            </button>
                                        </form>
                                        {{-- <a href="/dashboard/posts" class="btn btn-outline-danger d-flex justify-content-center col-4">
                                            <i class="bi bi-trash-fill mx-2"></i>
                                            Hapus
                                        </a> --}}
                                    </div>
                                </article>
                            </div>
                        </div>
                        <!-- /.card -->
                    </div>
                    <!--/.col -->
                </div>
                <!-- /.row -->
            </div>
        </section>
    </div>
    <!-- /.content-wrapper -->
@endsection
