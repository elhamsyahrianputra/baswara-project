{{-- {{ dd($collaborations) }} --}}
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
                    <h3>Collaborations</h3>
                    {{-- <p class="text-subtitle text-muted">A sortable, searchable, paginated table without dependencies thanks to simple-datatables</p> --}}
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">DataTable</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <span>Collaboration</span>
                    <a href="/admin/collaborations/create" class="btn btn-success"><i class="fas fa-plus me-1"></i>Add Collaborations</a>
                </div>
                <div class="card-body">
                    <table class="table table-striped"  id="table1">
                        <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th class="text-center">Name</th>
                                <th class="text-center">Link To</th>
                                <th class="text-center">Image</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($collaborations as $collaboration)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $collaboration->name }}</td>
                                <td>{{ $collaboration->url_to }}</td>
                                <td class="text-center col-4">
                                    @if ($collaboration->image_url)
                                        <img src="/storage/{{ $collaboration->image_url }}" class="img-fluid img-thumbnail p-1" style="max-height:150px;" alt="">
                                    @else
                                        <img src="https://via.placeholder.com/150" alt="NULL">
                                    @endif
                                </td>
                                <td class="col-2">
                                    <a class="btn btn-outline-warning m-1 col-12" href="/admin/collaborations/{{ $collaboration->id }}/edit">
                                        <i class="bi bi-pencil-square"></i>
                                        <span>Edit</span>
                                    </a>
                                    <form action="/admin/collaborations/{{ $collaboration->id }}" method="POST" class="d-inline">
                                        @method('delete')
                                        @csrf
                                        <button class="btn btn-outline-danger m-1 col-12" onclick="return confirm('Are you sure?')">
                                            <i class="bi bi-trash-fill"></i>
                                            <span>Hapus</span>
                                        </button>
                                    </form>
                                </td>

                                {{-- <td class="project-actions text-right">
                                    <a class="btn btn-info btn-sm" href="/admin/categories/{{ $collaboration->id }}/edit">
                                        <i class="fas fa-pencil-alt">
                                        </i>
                                        Edit
                                    </a>
                                    <form action="/admin/categories/{{ $collaboration->id }}" method="post" class="d-inline">
                                        @method('delete')
                                        @csrf
                                        <button class="btn btn-danger btn-sm delete">
                                            <i class="fas fa-trash">
                                            </i>
                                            Delete
                                        </button>
                                    </form>
        
                                </td> --}}
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