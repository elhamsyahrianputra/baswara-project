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
                    <h3>Info Seputar BIPA (Post)</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Post</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <span>Postingan Info Seputar BIPA</span>
                    <a href="/admin/posts/create" class="btn btn-success"><i class="fas fa-plus me-1"></i>Add Post</a>
                </div>
                <div class="card-body">
                    <table class="table table-striped"  id="table1">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Author</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($posts as $post)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $post->title }}</td>
                                <td>{{ $post->author->name }}</td>
                                <td class="project-actions text-center">
                                    <a class="btn btn-outline-info" href="/admin/posts/{{ $post->slug }}">
                                        <i class="bi bi-eye-fill"></i>
                                    </a>
                                    <a class="btn btn-outline-warning" href="/admin/posts/{{ $post->slug }}/edit">
                                        <i class="bi bi-pencil-square"></i>
                                    </a>
                                    <form action="/admin/posts/{{ $post->slug }}" method="POST" class="d-inline">
                                        @method('delete')
                                        @csrf
                                        <button class="btn btn-outline-danger" onclick="return confirm('Are you sure?')">
                                            <i class="bi bi-trash-fill"></i>
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