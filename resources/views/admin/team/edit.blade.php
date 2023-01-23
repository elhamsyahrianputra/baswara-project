@extends('layouts.admin.main')

@section('content')

<div id="main-content">
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Edit Data</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Layout Vertical Navbar</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <section class="section">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <!-- left column -->
                <div class="col-md-11">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Data Team</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="/admin/teams/{{ $team->id }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="inputName">Nama Lengkap</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="inputName" placeholder="Nama Lengkap" name="name" value="{{ old('name', $team) }}" autocomplete="off"/>                          
                                </div>
                                <div class="form-group">
                                    <label for="inputDivision">Division</label>
                                    <input type="text" class="form-control @error('division') is-invalid @enderror" id="inputDivision" placeholder="Division" name="division" value="{{ old('division', $team) }}" autocomplete="off"/>                           
                                </div>
                                <div class="form-group">
                                    <label for="inputBiography">Biography</label>
                                    <textarea id="inputBiography" class="form-control  @error('biography') is-invalid @enderror" rows="3" placeholder="Enter your biography" name="biography" autocomplete="off">{{ old('biography', $team) }}</textarea>                          
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
                                                <input type="text" id="inputInstagramURL" class="form-control @error('instagram_url') is-invalid @enderror" placeholder="www.instagram.com/example" name="instagram_url" value="{{ old('instagram_url', $team) }}" autocomplete="off"/>
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
                                                <input type="text" id="inputFacebookURL" class="form-control @error('facebook_url') is-invalid @enderror" placeholder="www.facebook.com/example" name="facebook_url" value="{{ old('facebook_url', $team) }}" autocomplete="off"/>
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
                                                <input type="text" id="inputLinkedInURL" class="form-control @error('linkedin_url') is-invalid @enderror" placeholder="www.linkedin.com/in/example" name="linkedin_url" value="{{ old('linkedin_url', $team) }}" autocomplete="off"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputImageURL">File input</label>
                                    <img class="img-preview mb-4 img-bordered d-block" src="{{ asset('storage/' . $team->image_url) }}" style="max-height: 300px">
                                    <div class="input-group">
                                        <input type="file" onchange="imagePreview()"
                                            class="form-control @error('image_url') is-invalid @enderror"
                                            id="inputImageURL" name="image_url">
                                        <label class="input-group-text" for="inputImageURL">
                                            Browse
                                        </label>
                                    </div>
                                </div>

                                @error('image_url')
                                    <div class="">
                                        {{ $message }}
                                    </div>
                                @enderror

                                <input type="hidden" value="{{ $team->image_url }}" name="old_image">

                                {{-- <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1" />
                                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                </div> --}}
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary float-right">Submit</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
                <!--/.col (left) -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
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