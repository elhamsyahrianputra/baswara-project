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
                    <h3>Edit Course</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/admin">Admin</a></li>
                            <li class="breadcrumb-item"><a href="/admin/courses">Course</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Chapter</li>
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
                            <h3 class="card-title">Data Chapter</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="/admin/chapters/{{ $chapter->id }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="inputName">Chapter Name</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror"
                                        id="inputName" placeholder="Chapter Name" name="name" value="{{ old('name', $chapter) }}"
                                        autocomplete="off" />
                                </div>

                                <div class="form-group">
                                    <label for="inputDescription">Description</label>
                                    <textarea class="form-control @error('description') is-invalid @enderror"
                                        id="inputDescription" rows="3" placeholder="Enter your description" name="description"
                                        autocomplete="off">{{ old('description', $chapter) }}</textarea>
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

    <section class="section">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <span>Theory</span>
                <a href="/admin/theories/create?chapter_id={{ $chapter->id }}" class="btn btn-success"><i class="fas fa-plus me-1"></i>Add Theory</a>
            </div>
            <div class="card-body">
                <table class="table table-striped"  id="table1">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($chapter->theories as $theory)
                        <tr>
                            <td>Theory {{ $loop->iteration }}</td>
                            <td>{{ $theory->name}}</td>
                            <td>{{ $theory->description }}</td>
                            <td class="project-actions text-right">
                                <a class="btn btn-info btn-sm mt-1" href="/admin/theories/{{ $theory->id }}/edit">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    Edit
                                </a>
                                <form action="/admin/theories/{{ $theory->id }}" method="post" class="d-inline">
                                    @method('delete')
                                    @csrf
                                    <button class="btn btn-danger mt-1 btn-sm delete">
                                        <i class="fas fa-trash">
                                        </i>
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
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