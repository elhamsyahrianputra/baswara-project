@extends('layouts.main')

@section('content')
    <header class="page">
        <div class="page_main">
            <div class="underlay"></div>
            <div class="container">
                <div class="content-wrapper">
                    <h1 class="page_main-header">Info Seputar BIPA</h1>
                    <p class="page_main-text">
                        @if (request('author'))
                            Seluruh postingan dari {{ $title }}
                        @else
                            Berita, acara, dan pembaruan lainnya akan tersedia di halaman ini! Nantikan kabar baik dari
                            kami.
                        @endif
                    </p>

                    <form action="#" method="get" class="page_main-form" role="search" data-type="search">
                        <i class="icon-search-solid icon"></i>
                        <input name="search_post" class="field required" type="search" placeholder="Search for…"
                            value="{{ request('search_post') }}" />
                        @if (request('author'))
                            <input type="hidden" name="author" value="{{ request('author') }}">
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </header>

    <!-- events content start -->
    <main>
        @if ($posts->count())
            <section class="event">
                <div class="container d-lg-flex justify-content-between">
                    <div class="event_media">
                        <picture>
                            <img class="lazy"
                                src="{{ $posts[0]->image_url != null ? $posts[0]->image_url : '/dist/img/placeholder.jpg' }}"
                                alt="media" />
                        </picture>
                        <span class="event-date">
                            <span class="">{{ $posts[0]->created_at->diffForHumans() }}</span>
                        </span>
                    </div>
                    <div class="event_main">
                        <h3 class="event_main-title">{{ $posts[0]->title }}</h3>
                        <span class="event_main-price event-price text">
                            <a href="/posts?author={{ $posts[0]->author->id }}">
                                Penulis: {{ $posts[0]->author->name }}
                            </a>
                        </span>
                        <p class="event_main-text">
                            {{ $posts[0]->excerpt }}
                        </p>
                        <a class="event_main-btn btn btn--gradient" href="#">
                            <span class="text">Baca Selengkapnya</span>
                        </a>
                    </div>
                </div>
            </section>

            <section class="list">
                <div class="container">
                    <ul class="list_events d-md-flex flex-wrap">
                        @foreach ($posts->skip(1) as $post)
                            <li class="list_events-card col-md-6 col-lg-4" data-aos="fade-up"
                                data-order="{{ $loop->iteration }}">
                                <div class="card-wrapper d-flex flex-column">
                                    <div class="media">
                                        <picture>
                                            <img class="lazy"
                                                src="{{ $post->image_url != null ? $post->image_url : '/dist/img/placeholder.jpg' }}"
                                                alt="media" />
                                        </picture>
                                        <span class="event-date">
                                            <span class="">{{ $post->created_at->diffForHumans() }}</span>
                                        </span>
                                    </div>
                                    <div class="main d-flex flex-column justify-content-between">
                                        <span class="main_price event-price">
                                            <a href="/posts?author={{ $post->author->id }}">
                                                Penulis: {{ $post->author->name }}
                                            </a>
                                        </span>
                                        <h4 class="main_title">{{ $post->title }}</h4>
                                        <p class="main_text">
                                            {{ $post->excerpt }}
                                        </p>
                                        <a class="event_main-btn btn btn--gradient" href="#">
                                            <span class="text">
                                                Baca Selengkapnya <i class="icon-arrow-right-solid icon"></i>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                    <div class="pagination d-flex align-items-center justify-content-sm-end">
                        {{ $posts->links('partials.landingpage.pagination') }}
                    </div>
                </div>
            </section>
        @endif
    </main>
@endsection

@section('script')
    <script src="dist/js/team.min.js"></script>
@endsection
