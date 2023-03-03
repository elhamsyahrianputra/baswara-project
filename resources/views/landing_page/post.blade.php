@extends('layouts.main')

@section('content')
    <main>
        <div class="post">
            <div class="container d-flex flex-column flex-lg-row justify-content-between">
                <aside class="sidebar collapse" id="sidebar">
                    <div class="sidebar_block sidebar_block--recent">
                        <h4 class="sidebar_block-header">Postingan lainnya dari {{ $post->author->name }}</h4>
                        <ul class="list">
                            @foreach ($posts as $item)
                                <li class="list-item">
                                    <div class="media">
                                        <picture>
                                            <a href="/posts/{{ $item->slug }}">
                                                <img class="lazy"
                                                    @if ($item->image_url) src="/storage/{{ $item->image_url }}"
                                                    @else
                                                        src= "/dist/img/placeholder.jpg" @endif
                                                    alt="media" />
                                            </a>
                                        </picture>
                                    </div>
                                    <div class="main">
                                        <a class="main_title h5" href="/posts/{{ $item->slug }}">
                                            {{ $item->title }}
                                        </a>
                                        <ul class="main_meta d-flex align-items-center">
                                            <li class="main_meta-item d-flex align-items-center">
                                                <i class="icon-clock-solid icon"></i>
                                                {{ $item->created_at->diffForHumans() }}
                                            </li>
                                            <li class="main_meta-item d-flex align-items-center">
                                                <i class="icon-user-solid icon"></i> 
                                                <a href="/posts?author={{ $item->author->id }}">
                                                    {{ $item->author->name }}
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </aside>
                <div class="post_content">
                    <article class="post_content-article">
                        <div class="post_content-article_header">
                            <h2 class="title">
                                <a href="/posts/{{ $post->slug }}">
                                    {{ $post->title }}
                                </a>
                            </h2>
                            <div class="media" style="height:100%;">
                                <picture>
                                    <img class="lazy"
                                        @if ($post->image_url) 
                                            src="/storage/{{ $post->image_url }}"
                                        @else
                                            src= "/dist/img/placeholder.jpg" 
                                        @endif
                                        
                                        alt="media" />
                                </picture>
                            </div>
                            <ul class="metadata d-flex flex-wrap">
                                <li class="metadata_item d-flex align-items-center">
                                    <i class="icon-clock-solid icon"></i> {{ $post->created_at->diffForHumans() }}
                                </li>
                                <li class="metadata_item d-flex align-items-center"><i class="icon-user-solid icon"></i>
                                    {{ $post->author->name }}
                                </li>
                            </ul>
                        </div>
                        <div class="post_content-article_block">
                            {!! $post->body !!}
                        </div>
                    </article>
                    <section class="post_content-footer">
                        <div class="post_content-footer_recommended">
                            <h4 class="title">Informasi yang mungkin sedang anda cari</h4>
                            <div class="content d-md-flex justify-content-between">
                                @foreach ($recommends as $recommend)
                                    <div class="content_block">
                                        <div class="media">
                                            <a href="/posts/{{ $recommend->slug }}">
                                                <picture>
                                                    <img class="lazy"
                                                        @if ($recommend->image_url) src="/storage/{{ $recommend->image_url }}"
                                                    @else
                                                        src="/dist/img/placeholder.jpg" @endif
                                                        alt="media" />
                                                </picture>
                                            </a>
                                        </div>
                                        <div class="main">
                                            <a class="main_title h5" href="/posts/{{ $recommend->slug }}">
                                                {{ $recommend->title }}
                                            </a>
                                            <ul class="main_meta d-flex align-items-center">
                                                <li class="main_meta-item d-flex align-items-center">
                                                    <i class="icon-clock-solid icon"></i>
                                                    {{ $recommend->created_at->diffForHumans() }}
                                                </li>
                                                <li class="main_meta-item d-flex align-items-center">
                                                    <i class="icon-user-solid icon"></i>
                                                    <a href="/posts?author={{ $recommend->author->id }}">
                                                        {{ $recommend->author->name }}
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </main>
@endsection
