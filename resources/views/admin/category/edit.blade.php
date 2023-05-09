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
                    <h3>Add Course</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="/admin/categories">Category</a></li>
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
                        <form action="/admin/categories/{{ $category->id }}" method="post">
                            @csrf
                            @method('put')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="inputName">Category Name</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror"
                                        id="inputName" placeholder="Enter category name ...." name="name" value="{{ old('name', $category) }}"
                                        autocomplete="off" />
                                    @error('name')    
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="inputDescrition">Description</label>
                                    <input type="text" class="form-control @error('description') is-invalid @enderror"
                                        id="inputDescrition" placeholder="Enter category description ...." name="description" value="{{ old('description', $category) }}"
                                        autocomplete="off" />
                                    @error('description')    
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

    <section class="section">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h3 class="card-title">Course - Category:{{ $category->name }}</h3>
            </div>
            <div class="card-body">
                <table class="table table-striped"  id="table1">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Author</th>
                            <th>Description</th>
                            <th>Price</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($courses as $course)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $course->name}}</td>
                            <td>{{ $course->author->name}}</td>
                            <td>{{ $course->description }}</td>
                            <td>Rp{{ number_format($course->price, 0, ",", ".") }}</td>
                            <td class="project-actions text-center">
                                <a class="btn btn-info btn-sm mt-1" href="/admin/courses/{{ $course->id }}/edit">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    Edit
                                </a>
                                <form action="/admin/courses/{{ $course->id }}" method="post" class="d-inline">
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
            imgPreview.classList.add('border');

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