@if ($paginator->hasPages())
    <ul class="flex gap-2 md:gap-3 flex-wrap md:font-semibold items-center">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li>
                <span class="border md:w-10 md:h-10 w-8 h-8 flex items-center rounded-full justify-center border-primary text-primary opacity-50 cursor-not-allowed">
                    <i class="las la-angle-left text-lg"></i>
                </span>
            </li>
        @else
            <li>
                <a href="{{ $paginator->previousPageUrl() }}" class="hover:bg-primary text-primary rtl:rotate-180 hover:text-n0 border md:w-10 duration-300 md:h-10 w-8 h-8 flex items-center rounded-full justify-center border-primary">
                    <i class="las la-angle-left text-lg"></i>
                </a>
            </li>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- Dots --}}
            @if (is_string($element))
                <li>
                    <span class="border md:w-10 md:h-10 w-8 h-8 flex items-center rounded-full justify-center border-primary text-primary">
                        {{ $element }}
                    </span>
                </li>
            @endif

            {{-- Page numbers --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    <li>
                        @if ($page == $paginator->currentPage())
                            <span class="hover:bg-primary text-n0 bg-primary hover:text-n0 border md:w-10 duration-300 md:h-10 w-8 h-8 flex items-center rounded-full justify-center border-primary">
                                {{ $page }}
                            </span>
                        @else
                            <a href="{{ $url }}" class="hover:bg-primary text-primary hover:text-n0 border md:w-10 duration-300 md:h-10 w-8 h-8 flex items-center rounded-full justify-center border-primary">
                                {{ $page }}
                            </a>
                        @endif
                    </li>
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li>
                <a href="{{ $paginator->nextPageUrl() }}" class="hover:bg-primary text-primary hover:text-n0 rtl:rotate-180 border md:w-10 duration-300 md:h-10 w-8 h-8 flex items-center rounded-full justify-center border-primary">
                    <i class="las la-angle-right text-lg"></i>
                </a>
            </li>
        @else
            <li>
                <span class="border md:w-10 md:h-10 w-8 h-8 flex items-center rounded-full justify-center border-primary text-primary opacity-50 cursor-not-allowed">
                    <i class="las la-angle-right text-lg"></i>
                </span>
            </li>
        @endif
    </ul>
@endif
