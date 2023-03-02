@extends('layouts.admin')

@section('style')
    <link rel="stylesheet" href="{{ asset('mazer/extensions/choices.js/public/assets/styles/choices.css') }}">
    <link rel="stylesheet" href="{{ asset('/mazer/extensions/simple-datatables/style.css') }}">
    <link rel="stylesheet" href="{{ asset('/mazer/css/pages/simple-datatables.css') }}">
@endsection

@section('content')
    <!-- Content Wrapper -->
    <div id="main-content">
        <div class="page-heading">
            <div class="page-title">
                <div class="row">
                    <div class="col-12 col-md-6 order-md-1 order-last">
                        <h3>Edit Collaborations</h3>
                    </div>
                    <div class="col-12 col-md-6 order-md-2 order-first">
                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/admin">Admin</a></li>
                                <li class="breadcrumb-item"><a href="/admin/collaborations">Collaboration</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Edit</li>
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
                            <form action="/admin/collaborations/{{ $collaboration->id }}" method="post"  enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="inputName">Name Collaborator (Organization/University)</label>
                                        <input type="text" class="form-control @error('name') is-invalid @enderror"
                                            id="inputName" placeholder="Enter collaborator name ...." name="name"
                                            value="{{ old('name', $collaboration->name) }}" autocomplete="off" required />
                                        @error('name')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="inputDescrition">Link Website Organization</label>
                                        <input type="text" class="form-control @error('url_to') is-invalid @enderror"
                                            id="inputUrl_to" placeholder="Enter collaborator description ...."
                                            name="url_to" value="{{ old('url_to', $collaboration->url_to) }}" autocomplete="off"
                                            required />
                                        @error('url_to')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="inputImageURL">File Image</label>
                                        <img class="img-preview mb-4 img-bordered d-block img-thumbnail" src="{{ asset('storage/' . $collaboration->image_url) }}" style="max-height: 300px">
                                        <div class="input-group">
                                            <input type="file" onchange="imagePreview()"
                                                class="form-control @error('image_url') is-invalid @enderror"
                                                id="inputImageURL" name="image_url">
                                            <label class="input-group-text" for="inputImageURL">
                                                Browse
                                            </label>
                                        </div>
                                    </div>
                                    <input type="hidden" value="{{ $collaboration->image_url }}" name="old_image">
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
    <!-- choices.js -->
    <script src="{{ asset('mazer/extensions/choices.js/public/assets/scripts/choices.js') }}"></script>
    <script src="{{ asset('mazer/js/pages/form-element-select.js') }}"></script>

    <!-- DataTables -->
    <script src="{{ asset('/mazer/extensions/simple-datatables/umd/simple-datatables.js') }}"></script>
    <script src="{{ asset('/mazer/js/pages/simple-datatables.js') }}"></script>

    <!-- Image Preview -->
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

        $(function() {
            bsCustomFileInput.init();
        });
    </script>
@endsection
