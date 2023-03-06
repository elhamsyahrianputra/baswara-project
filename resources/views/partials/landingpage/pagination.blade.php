{{-- <ul class="pagination_pages d-flex">
    <li class="pagination_pages-page">
        <a class="page active" href="#">
            <span class="page-number">1</span>
        </a>
    </li>
    <li class="pagination_pages-page">
        <a class="page" href="#">
            <span class="page-number">2</span>
        </a>
    </li>
    <li class="pagination_pages-page">
        <a class="page" href="#">
            <span class="page-number">3</span>
        </a>
    </li>
</ul>
<a class="pagination_next" href="#">
    <i class="icon-angle-right icon"></i>
</a> --}}
@if ($paginator->hasPages())
    <ul class="pagination_pages d-flex">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
        @else
            <li class="pagination_pages-page">
                <a class="page" href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">
                    <span class="page-number">
                        <i class="icon-angle-left icon"></i>
                    </span>
                </a>
            </li>
        @endif
        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li class="disabled" aria-disabled="true"><span>{{ $element }}</span></li>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="pagination_pages-page" aria-current="page">
                            <a class="page active" href="#post">
                                <span class="page-number">{{ $page }}</span>
                            </a>
                        </li>
                    @else
                        <li class="pagination_pages-page">
                            <a class="page" href="{{ $url }}">
                                <span class="page-number"> {{ $page }}</span>
                            </a>
                        </li>
                    @endif
                @endforeach
            @endif
        @endforeach
        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li class="pagination_pages-page">
                <a class="page" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">
                    <span class="page-number">
                        <i class="icon-angle-right icon"></i>
                    </span>
                </a>
            </li>
        @endif

    </ul>
@endif
