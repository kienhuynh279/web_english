{{-- <ul class="pagi">
    <li class="pagi-item pagi-action pagi-prev is-disabled">
    <i class="fal fa-angle-left"></i>
    </li>
    <li class="pagi-item">1</li>
    <li class="pagi-item is-active">2</li>
    <li class="pagi-item">3</li>
    <li class="pagi-item">4</li>
    <li class="pagi-item">5</li>
    <li class="pagi-item pagi-action pagi-next">
    <i class="fal fa-angle-right"></i>
    </li>
    </ul> --}}

@if ($paginator->hasPages())
    <nav>
        <ul class="pagi">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="pagi-item pagi-action pagi-prev is-disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                    <i class="fal fa-angle-left"></i>
                </li>
            @else
                <li>
                    <a href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">&lsaquo;</a>
                </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="pagi-item " aria-disabled="true"><span>{{ $element }}</span></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="active disabled pagi-item" aria-current="page"><span>{{ $page }}</span></li>
                        @else
                            <li><a href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li>
                    <a href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">&rsaquo;</a>
                </li>
            @else
                <li class="pagi-item pagi-action pagi-next" aria-disabled="true" aria-label="@lang('pagination.next')">
                    <i class="fal fa-angle-right"></i>
                </li>
            @endif
        </ul>
    </nav>
@endif
