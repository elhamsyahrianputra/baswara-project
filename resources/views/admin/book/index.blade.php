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
                    <h3>Buku (Library) BIPA</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Book</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <span>Buku (Library) BIPA</span>
                    <a href="/admin/books/create" class="btn btn-success"><i class="fas fa-plus me-1"></i>Add Book</a>
                </div>
                <div class="card-body">
                    <table class="table table-striped" id="table1">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Judul</th>
                                <th>Penerbit</th>
                                <th>Penulis</th>
                                <th>File</th>
                                <th width="15%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($books as $book)
                            <tr>
                                <td class="align-middle">{{ $loop->iteration }}</td>
                                <td class="align-middle">{{ $book->title }}</td>
                                <td class="align-middle">{{ $book->publisher }}</td>
                                <td class="align-middle">{{ $book->author }}</td>
                                <td class="text-center">
                                    <button type="button" class="border border-0 {{ $book->pdf_url == !null ? '' : 'd-none' }}" data-bs-toggle="modal" data-bs-target="#readBook-{{ $book->id }}">
                                        <img src="{{ asset('storage/'.$book->cover_url) }}" alt="book" style="max-width: 100px; max-height: 160px">
                                    </button> 
                                </td>
                                
                                <td class="project-actions text-center align-middle">
                                    <a class="btn btn-info" href="/admin/books/{{ $book->slug }}/edit">
                                        <i class="bi bi-pencil-square"></i>
                                    </a>
                                    <form action="/admin/books/{{ $book->slug }}" method="POST" class="d-inline">
                                        @method('delete')
                                        @csrf
                                        <button class="btn btn-danger"
                                            onclick="return confirm('Are you sure?')">
                                            <i class="bi bi-trash-fill"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>

                            <!--Book Modal -->
                            <div class="modal fade text-left w-100" id="readBook-{{ $book->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel16" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                                    <div class="modal-content">
                                        {{-- <div class="modal-header">
                                            <h4 class="modal-title" id="myModalLabel16">
                                                Extra Large Modal
                                            </h4>
                                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                                <i data-feather="x"></i>
                                            </button>
                                        </div> --}}
                                        <div class="modal-body text-center">
                                            <iframe src="{{ asset('storage/'.$book->pdf_url) }}" frameborder="0" style="width: 100%; height: 85vh;"></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
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