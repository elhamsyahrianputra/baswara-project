@extends('layouts.main')
@section('style')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
@endsection

@section('content')
<main>
    <section>
        <div class="container">
            <div class="row p-3 m-4" style="background-color: rgba(226, 190, 32, 0.2)">
                <div class="col-4 d-flex align-items-center justify-content-center">
                    <img src="{{ asset('storage/'.$book->cover_url) }}" alt=""
                        style="max-height: 415px; object-fit: contain">
                </div>
                <div class="col-8">
                    <h4 class="my-3">{{ $book->title }}</h4>
                    <div class="content-wrapper row">
                        <div class="mb-2">
                            <h6>Penerbit</h6>
                            <span>{{ $book->publisher }}</span>
                        </div>
                        <div class="mb-2">
                            <h6>Penulis</h6>
                            <span>{{ $book->author }}</span>
                        </div>
                        <div class="mb-2">
                            <h6>ISBN</h6>
                            <span>{{ $book->isbn }}</span>
                        </div>
                        <div class="mb-2">
                            <h6>Edisi</h6>
                            <span>{{ $book->edition }}</span>
                        </div>
                        <div class="mb-2">
                            <h6>Tanggal Terbit</h6>
                            <span>{{ $book->published_at }}</span>
                        </div>
                    </div>
                    <div>
                        <a id="book-download" class="btn btn--download" href="{{ asset("storage/".$book->pdf_url) }}" download>
                            <i class="fas fa-download"></i>
                            <span class="ms-2">Unduh Buku</span>
                        </a>
                        <button type="button" class="btn btn--read" id="signUpTrigger">
                            <i class="fas fa-book-open"></i>
                            <span class="ms-2">Baca Buku</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection

@section('script')
<script src="{{ asset('dist/js/courses.min.js') }}"></script>
<script src="{{ asset('dist/js/reviews.min.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
@endsection