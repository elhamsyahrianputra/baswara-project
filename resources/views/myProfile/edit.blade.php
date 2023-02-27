@extends('layouts.admin')

@section('style')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/datepicker/css/bootstrap-datepicker.css">
    <script src="https://code.jquery.com/jquery-3.6.3.slim.js"
        integrity="sha256-DKU1CmJ8kBuEwumaLuh9Tl/6ZB6jzGOBV/5YpNE2BWc=" crossorigin="anonymous"></script>
@endsection

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
                            <form action="/profile/{{ $user->id }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="inputName">Nama Lengkap</label>
                                        <input type="text" class="form-control @error('name') is-invalid @enderror"
                                            id="inputName" placeholder="Nama Lengkap" name="name"
                                            value="{{ old('name', $user->name) }}" autocomplete="off" required >
                                    </div>

                                    <div class="form-group">
                                        <label for="inputName">Email</label>
                                        <input type="email" class="form-control @error('email') is-invalid @enderror"
                                            id="inputEmail" placeholder="abcd@gmail.com" name="email"
                                            value="{{ old('email', $user->email) }}" autocomplete="off" required >
                                    </div>

                                    <div class="form-group">
                                        <label for="inputName">Tanggal Lahir</label>
                                        <div class="input-group date">
                                            <div class="input-group-text">
                                                <i class="bi bi-calendar d-flex align-items-center"></i>
                                            </div>
                                            <input placeholder="masukkan tanggal lahir" type="text"
                                                class="form-control datepicker @error('birthdate') is-invalid @enderror"
                                                name="birthdate" value="{{ old('birthdate',$user->birthdate)}}" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputName">Gender</label>
                                        <select class="form-select @error('gender') is-invalid @enderror" name="gender" required>
                                            <option {{ old('gender', $user->gender) == '' ? 'selected' : '' }}
                                                value=""> Pilih Gender </option>
                                            <option {{ old('gender', $user->gender) == 1 ? 'selected' : '' }}
                                                value="1"> Laki-Laki
                                            <option>
                                            <option {{ old('gender', $user->gender) == 2 ? 'selected' : '' }}
                                                value="2"> Perempuan
                                            <option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputBiography">About me</label>
                                        <textarea id="inputBiography" class="form-control  @error('about_me') is-invalid @enderror" rows="3"
                                            placeholder="Enter about you" name="about_me" autocomplete="off" required>{{ old('about_me', $user->about_me) }}</textarea>
                                    </div>

                                    {{-- <h4>Social Media</h4>
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
                                                        value="{{ old('instagram_url', $team) }}" autocomplete="off" />
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
                                                        value="{{ old('facebook_url', $team) }}" autocomplete="off" />
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
                                                        value="{{ old('linkedin_url', $team) }}" autocomplete="off" />
                                                </div>
                                            </div>
                                        </div>
                                    </div> --}}
                                    <div class="form-group">
                                        <label for="inputImageURL">File input</label>
                                        @if ($user->avatar_url != 'default-avatar.jpg')
                                            <img class="img-preview mb-4 img-bordered d-block"
                                                src="/storage/{{ $user->avatar_url }}" style="max-height: 300px">
                                        @else
                                            <img class="img-preview mb-4 img-bordered d-block"
                                                src="/dist/img/avatar_default.jpg" style="max-height: 300px">
                                        @endif

                                        <div class="input-group">
                                            <input type="file" onchange="imagePreview()"
                                                class="form-control @error('avatar_url') is-invalid @enderror"
                                                id="inputImageURL" name="avatar_url">
                                            <label class="input-group-text" for="inputImageURL">
                                                Browse
                                            </label>
                                        </div>
                                    </div>

                                    @error('avatar_url')
                                        <div class="">
                                            {{ $message }}
                                        </div>
                                    @enderror

                                    <input type="hidden" value="{{ $user->avatar_url }}" name="old_image">

                                    {{-- <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1" />
                                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                </div> --}}
                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary float-right">Update</button>
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

        $(function() {
            bsCustomFileInput.init();
        });
    </script>

    <script src="/datepicker/js/bootstrap-datepicker.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <script type="text/javascript">
        $(function() {
            $(".datepicker").datepicker({
                format: 'yyyy-mm-dd',
                autoclose: true,
                todayHighlight: true,
                container: 'body'
            });
        });
    </script>
@endsection
