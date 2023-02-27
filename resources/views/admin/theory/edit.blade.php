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
                    <h3>Edit Theory</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/admin">Admin</a></li>
                            <li class="breadcrumb-item"><a href="/admin/Course">Course</a></li>
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
                            <h3 class="card-title">Data Theory</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="/admin/courses/{{ $theory->id }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="inputName">Theory Name</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror"
                                        id="inputName" placeholder="Theory Name" name="name" value="{{ old('name', $theory) }}"
                                        autocomplete="off" />
                                </div>
                                <div class="form-group">
                                    <label for="inputName">Speaker Name</label>
                                    <input type="text" class="form-control @error('spekaer') is-invalid @enderror"
                                        id="inputSpekaer" placeholder="Spekaer" name="spekaer" value="{{ old('speaker', $theory) }}"
                                        autocomplete="off" />
                                </div>


                                <div class="form-group">
                                    <label for="inputDescription">Description</label>
                                    <textarea class="form-control @error('description') is-invalid @enderror"
                                        id="inputDescription" rows="3" placeholder="Enter your description" name="description"
                                        autocomplete="off">{{ old('description', $theory) }}</textarea>
                                </div>

                                <div class="form-group">
                                    <label for="inputCoverURL">Video</label>
                                    {{-- <img class="img-preview mb-4 img-bordered d-block" src="{{ asset('storage/' . $te->cover_url) }}" style="max-height: 300px"> --}}
                                    <div class="input-group">
                                        <input type="file" onchange="imagePreview()"
                                            class="form-control @error('video_url') is-invalid @enderror"
                                            id="inputVideoURL" name="video_url">
                                        <label class="input-group-text" for="inputVideoURL">
                                            Browse
                                        </label>
                                    </div>
                                </div>

                                {{-- <input type="hidden" value="{{ $course->video_url }}" name="old_image"> --}}
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