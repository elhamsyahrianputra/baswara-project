@extends('layouts.admin')

@section('style')
<link rel="stylesheet" href="{{ asset('/mazer/extensions/simple-datatables/style.css') }}">
<link rel="stylesheet" href="{{ asset('/mazer/css/pages/simple-datatables.css') }}">
@endsection

@section('content')
<!-- Content Wrapper. Contains page content -->
<div id="main-content">
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Course</h3>
                    <p class="text-subtitle text-muted">A sortable, searchable, paginated table without dependencies thanks to simple-datatables</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/admin">Admin</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Course</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <span>Course</span>
                    <a href="/admin/courses/create" class="btn btn-success"><i class="fas fa-plus me-1"></i>Add Course</a>
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
                                <td class="project-actions text-right">
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
</div>
@endsection

@section('script')

<!-- DataTables -->
<script src="{{ asset('/mazer/extensions/simple-datatables/umd/simple-datatables.js') }}"></script>
<script src="{{ asset('/mazer/js/pages/simple-datatables.js') }}"></script>

<!-- SweetALert2 -->
<script src="{{ asset('/mazer/extensions/sweetalert2/sweetalert2.min.js') }}"></script>
<script src="{{ asset('/mazer/js/pages/sweetalert2.js') }}"></script>

<!-- Init SweetAlert Confirm Dialogue -->
<script>
    $('.delete').click(function() {
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#28a745',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!',
            reverseButtons: true
            }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire(
                'Deleted!',
                'Data has been deleted.',
                'success'
                )
            }
        })
    });
</script>
@endsection