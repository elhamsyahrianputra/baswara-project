@extends('layouts.admin')

@section('content')

<!-- Content Wrapper -->
<div id="main-content">
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Add Data</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/admin">Admin</a></li>
                            <li class="breadcrumb-item"><a href="/admin/teams">Teams</a></li>
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
                            <h3 class="card-title">Data Team</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="/admin/teams" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="inputName">Course Name</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror"
                                        id="inputName" placeholder="Course Name" name="name" value="{{ old('name') }}"
                                        autocomplete="off" />
                                </div>
                                <div class="form-group">
                                    <label for="inputDescription">Description</label>
                                    <textarea class="form-control @error('description') is-invalid @enderror"
                                        id="inputDescription" rows="3" placeholder="Enter your description" name="description"
                                        autocomplete="off">{{ old('description') }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="inputDivision">Division</label>
                                    <input type="text" class="form-control @error('division') is-invalid @enderror"
                                        id="inputDivision" placeholder="Division" name="division"
                                        value="{{ old('division') }}" autocomplete="off" />
                                </div>

                                <h4>Social Media</h4>
                                <div class="row">
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label for="inputInstagramURL">Instagram</label>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text">
                                                    <i class="fab fa-instagram"></i>
                                                </span>
                                                <input type="text" id="inputInstagramURL"
                                                    class="form-control @error('instagram_url') is-invalid @enderror"
                                                    placeholder="www.instagram.com/example" name="instagram_url"
                                                    value="{{ old('instagram_url') }}" autocomplete="off" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label for="inputFacebookURL">Facebook</label>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text">
                                                    <i class="fab fa-facebook-f"></i>
                                                </span>
                                                <input type="text" id="inputFacebookURL"
                                                    class="form-control @error('facebook_url') is-invalid @enderror"
                                                    placeholder="www.facebook.com/example" name="facebook_url"
                                                    value="{{ old('facebook_url') }}" autocomplete="off" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label for="inputLinkedInURL">LinkedIn</label>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text">
                                                    <i class="fab fa-linkedin-in"></i>
                                                </span>
                                                <input type="text" id="inputLinkedInURL"
                                                    class="form-control @error('linkedin_url') is-invalid @enderror"
                                                    placeholder="www.linkedin.com/in/example" name="linkedin_url"
                                                    value="{{ old('linkedin_url') }}" autocomplete="off" />
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="inputImageURL">File input</label>
                                    <img class="img-preview mb-4">
                                    <div class="input-group">
                                        <input type="file" onchange="imagePreview()"
                                            class="form-control @error('image_url') is-invalid @enderror"
                                            id="inputImageURL" name="image_url">
                                        <label class="input-group-text" for="inputImageURL">
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
                                <button type="submit" class="btn btn-primary">Submit</button>
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
    <script src="{{ asset('/AdminLTE/plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>

    <script>
        function imagePreview() {
        const image = document.querySelector('#inputImageURL');
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