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
                                <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Collaboration</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <section class="section">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <span>Pendaftar</span>
                        <a href="/admin/collaborations/create" class="btn btn-success"><i class="fas fa-plus me-1"></i>Add Collaborations</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped"  id="table1">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>No. Invoice</th>
                                    <th>Total Biaya</th>
                                    <th>Bukti Pembayaran</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($enrollments as $enrollment)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $enrollment->invoice_number }}</td>
                                    <td>{{ $enrollment->total_amount }}</td>
                                    <td class="text-center col-4">
                                            <!-- Button trigger for default modal -->
                                            <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#payment_proof">
                                                <i class="fas fa-eye"></i>
                                            </button>
            
                                            <!--Default size Modal -->
                                            <div class="modal fade text-left" id="payment_proof" tabindex="-1" role="dialog" aria-labelledby="myModalLabel18" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title" id="myModalLabel18">Bukti Pembayaran</h4>
                                                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                                                <i data-feather="x"></i>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <img width="100%" src="/storage/{{ $enrollment->payment_proof }}" alt="">
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-primary"
                                                                data-bs-dismiss="modal">
                                                                <i class="bx bx-x d-block d-sm-none"></i>
                                                                <span class="d-none d-sm-block">Tutup</span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                    </td>
                                    <td>
                                        <span class="badge bg-{{ $enrollment->status == 'paid' ? 'info' : 'danger'}}">{{ $enrollment->status }}</span>
                                    </td>
                                    <td class="col-2">
                                    @if ($enrollment->status == 'unpaid')
                                        <button type="button" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#inlineForm">
                                        Konfirmasi
                                        </button>
            
                                        <!--login form Modal -->
                                        <div class="modal fade text-left" id="inlineForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
                                            <div class="modal-lg modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title" id="myModalLabel33">
                                                            Konfirmasi Pembayaran
                                                        </h4>
                                                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                                            <i data-feather="x"></i>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col">
                                                                <div>
                                                                    <h5>No. Faktur</h5>
                                                                    <span class="fw-bold">INV-{{ $enrollment->invoice_number }}</span>
                                                                </div>
                                                                <div>
                                                                    <h5>Surel Pengguna</h5>
                                                                    <span>{{ $enrollment->user->email }}</span>
                                                                </div>
                                                                <div>
                                                                    <h5>Tanggal</h5>
                                                                    <span>{{ $enrollment->created_at }}</span>
                                                                </div>
                                                            </div>
                                                            <div class="col">
                                                                <h5>Rincian</h5>
                                                                    <div>
                                                                        <div>{{ $enrollment->course->name }}</div>
                                                                        <div>
                                                                            <h6 class="fw-bold">Rp.{{ $enrollment->course->price }}</h6>
                                                                        </div>
                                                                        <div>
                                                                            <a href="/course/{{ $enrollment->course->id }}" target="_parent" title="Buka Detail Kursus">
                                                                                <img src="/storage/{{ $enrollment->course->cover_url }}" alt="">
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                            </div>
                                                        </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                                                            <i class="bx bx-x d-block d-sm-none"></i>
                                                            <span class="d-none d-sm-block">Batal</span>
                                                        </button>
                                                        <form action="/admin/enrollment/confirm?invoice_id={{ $enrollment->id }}" method="post">
                                                            @csrf
                                                            <button type="submit" class="btn btn-primary ms-1">
                                                                <i class="bx bx-check d-block d-sm-none"></i>
                                                                <span class="d-none d-sm-block">Konfirmasi</span>
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @else
                                            <button type="submit" class="btn btn-sm btn-secondary disabled">Konfirmasi</button>
                                        @endif
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