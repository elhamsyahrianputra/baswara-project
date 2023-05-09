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
                    <h3>Category</h3>
                    <p class="text-subtitle text-muted">A sortable, searchable, paginated table without dependencies thanks to simple-datatables</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Category</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <span>Category</span>
                    <a href="/admin/categories/create" class="btn btn-success"><i class="fas fa-plus me-1"></i>Add Category</a>
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
                            @foreach ($categories as $category)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $category->name }}</td>
                                <td>{{ $category->description }}</td>
                                <td class="project-actions text-center">
                                    <a class="btn btn-info btn-sm" href="/admin/categories/{{ $category->id }}/edit">
                                        <i class="fas fa-pencil-alt">
                                        </i>
                                        Edit
                                    </a>
                                    <form action="/admin/categories/{{ $category->id }}" method="post" class="d-inline">
                                        @method('delete')
                                        @csrf
                                        <button class="btn btn-danger btn-sm delete">
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
    <script src="{{ asset('/AdminLTE/plugins/sweetalert2/sweetalert2.min.js') }}"></script>

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