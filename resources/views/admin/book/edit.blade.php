@extends('layouts.admin')

@section('style')
    <link rel="stylesheet" href="{{ asset('mazer/extensions/choices.js/public/assets/styles/choices.css') }}">
    {{-- summernote css --}}
    <link rel="stylesheet" href="{{ asset('mazer/pages/summernote.css') }}">
    <link rel="stylesheet" href="{{ asset('mazer/extensions/summernote/summernote-lite.css') }}">

    {{-- Need: Jquery --}}
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM="
        crossorigin="anonymous"></script>
@endsection

@section('content')
    <!-- Content Wrapper -->
    <div id="main-content">
        <div class="page-heading">
            <div class="page-title">
                <div class="row">
                    <div class="col-12 col-md-6 order-md-1 order-last">
                        <h3>Edit Post</h3>
                    </div>
                    <div class="col-12 col-md-6 order-md-2 order-first">
                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="/admin/posts">Post</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Add</li>
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
                            <div class="card-header">
                                <h3 class="card-title">Postingan Seputar BIPA</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action="/admin/posts/{{ $post->slug }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="inputTitle">Judul</label>
                                        <input type="text" class="form-control @error('title') is-invalid @enderror"
                                            id="title" placeholder="Enter title ...." name="title"
                                            value="{{ old('title', $post->title) }}" required>
                                        @error('title')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="inputSlug">Slug</label>
                                        <input type="text" class="form-control @error('slug') is-invalid @enderror"
                                            id="slug" placeholder="what-a-title" name="slug"
                                            value="{{ old('slug', $post->slug) }}" required readonly>
                                        @error('slug')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="inputAuthorID">Author</label>
                                        <select class="choices form-select @error('user_id') is-invalid @enderror"
                                            name="user_id">
                                            <option value="">Choose a author ....</option>
                                            @foreach ($authors as $author)
                                                <option value="{{ $author->id }}"
                                                    {{ old('user_id', $post->user_id) == $author->id ? 'selected' : '' }}>
                                                    {{ $author->name }} | {{ $author->email }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('user_id')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="image" class="form-label">Input Image</label>
                                        @if ($post->image_url)
                                            <img class="img-preview img-fluid mb-3 col-sm-5"
                                                src="{{ asset('storage/' . $post->image_url) }}" style="max-height: 300px">
                                        @else
                                        <img class="img-preview img-fluid mb-3 col-sm-5">
                                        @endif
                                        
                                        <input class="form-control @error('image_url') is-invalid @enderror" type="file"
                                            id="image" name="image_url" onchange="previewImage()">
                                        @error('image_url')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <input type="hidden" value="{{ $post->image_url }}" name="old_image">

                                    <div class="form-group">
                                        <label for="inputBody">Isi atau konten</label>
                                        <textarea class="form-control @error('body') is-invalid @enderror" name="body" id="summernote" style="height: 200px">{{ old('body', $post->body) }}</textarea>
                                        @error('body')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>


                                </div>

                                <!-- /.card-body -->

                                <div class="card-footer d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </form>
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


@section('script')
    <script>
        // Cek slug
        const title = document.querySelector('#title');
        const slug = document.querySelector('#slug');

        title.addEventListener('change', function() {
            fetch('/admin/posts/checkSlug?title=' + title.value)
                .then(response => response.json())
                .then(data => slug.value = data.slug)
        });
    </script>
    <!-- bs-custom-file-input -->
    {{-- Choices --}}
    <script src="{{ asset('mazer/extensions/choices.js/public/assets/scripts/choices.js') }}"></script>
    <script src="{{ asset('mazer/js/pages/form-element-select.js') }}"></script>

    {{-- Summernote --}}
    <script src="{{ asset('mazer/extensions/summernote/summernote.js') }}"></script>
    <script src="{{ asset('mazer/extensions/summernote/summernote-lite.js') }}"></script>
    <script>
        // preview image
        function previewImage() {
            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }

        // summernote
        $(document).ready(function() {
            $('#summernote').summernote({
                toolbar: [
                    // [groupName, [list of button]]
                    ['style', ['bold', 'italic', 'underline', 'clear']],
                    ['font', ['strikethrough', 'superscript', 'subscript']],
                    ['fontsize', ['fontsize']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['height', ['height']]
                ]
            });
        });

        $(function() {
            bsCustomFileInput.init();
        });
    </script>
@endsection
