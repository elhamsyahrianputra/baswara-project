@extends('layouts.admin')

@section('style')
    {{-- Need: Jquery --}}
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM="
        crossorigin="anonymous"></script>
@endsection

@section('content')
    <!-- Content Wrapper -->
    <div id="main-content">
        <div class="page-heading">
            <div class="page-title">
                <div class="row">
                    <div class="col-12 col-md-6 order-md-1 order-last">
                        <h3>Add Book</h3>
                    </div>
                    <div class="col-12 col-md-6 order-md-2 order-first">
                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="/admin/books">Book</a></li>
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
                                <h3 class="card-title">Buku BIPA</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action="/admin/books/{{ $book->slug }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="title">Judul Buku</label>
                                        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" placeholder="Judul Buku" name="title" value="{{ old('title', $book->title) }}">
                                        @error('title')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="publisher">Penerbit</label>
                                        <input type="text" class="form-control @error('publisher') is-invalid @enderror" id="publisher" placeholder="Penerbit" name="publisher" value="{{ old('publisher', $book->publisher) }}">
                                        @error('publisher')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="author">Penulis</label>
                                        <input type="text" class="form-control @error('author') is-invalid @enderror" id="author" placeholder="Penulis" name="author" value="{{ old('author', $book->author) }}">
                                        @error('author')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="cover_url" class="form-label">Input File</label>
                                        <img class="img-preview mb-3 d-block border" src="{{ asset('storage/' . $book->cover_url) }}" style="max-height: 300px">
                                        <input class="form-control @error('cover_url') is-invalid @enderror" type="file"
                                            id="cover_url" name="cover_url" onchange="previewImage()">
                                        @error('cover_url')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                        <input type="hidden" value="{{ $book->cover_url }}" name="old_image">
                                    </div>

                                    <div class="form-group">
                                        <label for="isbn">ISBN</label>
                                        <input type="text" class="form-control @error('isbn') is-invalid @enderror" id="isbn" placeholder="ISBN" name="isbn" value="{{ old('isbn', $book->isbn) }}">
                                        @error('isbn')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="edition">Edisi</label>
                                        <input type="text" class="form-control @error('edition') is-invalid @enderror" id="edition" placeholder="Edisi" name="edition" value="{{ old('edition', $book->edition) }}">
                                        @error('edition')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="published_at">Tanggal Terbit</label>
                                        <input type="date" class="form-control @error('published_at') is-invalid @enderror" id="published_at"  name="published_at" value="{{ old('published_at', $book->published_at) }}">
                                        @error('published_at')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="pdf_url" class="form-label">Input File</label>
                                        <input class="form-control @error('pdf_url') is-invalid @enderror" type="file" id="pdf_url" name="pdf_url" accept = "application/pdf">
                                        @error('pdf_url')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                        <input type="hidden" value="{{ $book->pdf_url }}" name="old_file">
                                    </div>

                                </div>
                                <!-- /.card-body -->


                                <div class="card-footer d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary">Edit</button>
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
    </div>
    <!-- /.content-wrapper -->
@endsection


@section('script')
    <script>
        // preview image
        function previewImage() {
            const image = document.querySelector('#cover_url');
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

        $(function() {
            bsCustomFileInput.init();
        });
    </script>
@endsection
