@extends('layouts.admin')

@section('style')
    <link rel="stylesheet" href="{{ asset('mazer/extensions/choices.js/public/assets/styles/choices.css') }}">
@endsection

@section('content')

<!-- Content Wrapper -->
<div id="main-content">
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Add Course</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="/admin/courses">Course</a></li>
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
                            <h3 class="card-title">Data Course</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="/admin/courses" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="inputName">Course Name</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror"
                                        id="inputName" placeholder="Course Name" name="name" value="{{ old('name') }}"
                                        autocomplete="off" />
                                </div>
                                <div class="form-group">
                                    <label for="inputAuthorID">Author</label>
                                    <select class="choices form-select" name="author_id">
                                        <option value="">Choose a author ....</option>
                                        @foreach ($authors as $author)
                                        <option value="{{ $author->id }}" {{ old('author_id') == $author->id ? 'selected' : '' }}>
                                            {{ $author->name }} | {{ $author->email }}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="inputDescription">Description</label>
                                    <textarea class="form-control @error('description') is-invalid @enderror"
                                        id="inputDescription" rows="3" placeholder="Enter your description" name="description"
                                        autocomplete="off">{{ old('description') }}</textarea>
                                </div>

                                <div class="form-group">
                                    <label for="inputAuthorID">Category</label>
                                    <select class="choices form-select multiple-remove" multiple="multiple" name="categories[]">
                                        <option value="">Choose category for course ....</option>
                                        @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                  </div>

                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="inputPrice">Price</label>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text">
                                                    Rp
                                                </span>
                                                <input type="number" id="inputPrice"
                                                    class="form-control @error('price') is-invalid @enderror"
                                                    placeholder="Enter price of course ...." name="price"
                                                    value="{{ old('price') }}" autocomplete="off" />
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="inputCoverURL">Course Cover</label>
                                    <img class="img-preview mb-4">
                                    <div class="input-group">
                                        <input type="file" onchange="imagePreview()"
                                            class="form-control @error('cover_url') is-invalid @enderror"
                                            id="inputCoverURL" name="cover_url">
                                        <label class="input-group-text" for="inputCoverURL">
                                            Browse
                                        </label>
                                    </div>
                                </div>

                                {{-- <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1" />
                                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                </div> --}}
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary">Create</button>
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
    <!-- bs-custom-file-input -->
    <script src="{{ asset('mazer/extensions/choices.js/public/assets/scripts/choices.js') }}"></script>
    <script src="{{ asset('mazer/js/pages/form-element-select.js') }}"></script>

    <script>
        function imagePreview() {
        const image = document.querySelector('#inputCoverURL');
        const imgPreview = document.querySelector('.img-preview');

        imgPreview.style.display = 'block';
        imgPreview.style.maxHeight = '300px';
        imgPreview.classList.add('img-bordered');

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function(oFREvent) {
            imgPreview.src = oFREvent.target.result;
        }
    }

    $(function () {
      bsCustomFileInput.init();
    });
    </script>
    @endsection