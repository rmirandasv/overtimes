@if ($paginator->hasPages())
<div class="columns my-0 has-background-grey-light mx-0 has-text-weight-bold">
    <div class="column my-0 has-text-primary">
        <span class="is-italic">{{ __('pagination.page') }}</span>
        {{ $paginator->currentPage() }} / {{ $paginator->lastPage() }}
    </div>
    <div class="column my-0 has-text-primary">
        <span class="is-italic">{{ __('pagination.showFrom') }}</span>
        {{ $paginator->firstItem() }}
        <span class="is-italic">{{ __('pagination.to') }}</span>
        {{ $paginator->lastItem() }}
    </div>
    <div class="column my-0 has-text-primary">
        <span class="is-italic">{{ __('pagination.total', [ 'total' => $paginator->total() ] ) }}</span>
    </div>
</div>
<nav role="navigation" aria-label="{{ __('Pagination Navigation') }}" class="pagination my-0 has-background-grey-light mx-0 is-rounded">
    <a class="pagination-previous" @if($paginator->currentPage() > 1) href="{{ $paginator->previousPageUrl() }}" @endif>
        {{ __('pagination.previous') }}
    </a>
    <a class="pagination-next" @if($paginator->hasMorePages()) href="{{ $paginator->nextPageUrl() }}" @endif>
        {{ __('pagination.next') }}
    </a>
    <ul class="pagination-list">

        <li>
            <a 
                class="pagination-link @if($paginator->currentPage() === 1) is-current @else has-background-white @endif" 
                @if($paginator->currentPage() > 1) href="{{ $paginator->url(1) }}" @endif>
                1
            </a>
        </li>
        @if($paginator->lastPage() > 2)
        <li>
            <span class="pagination-ellipsis">&hellip;</span>
        </li>
        @endif

        {{-- pagination items --}}
        @if($paginator->lastPage() > 2)
        @php
            $start = $paginator->currentPage();
            $end = $paginator->lastPage() - 1;

            if ($paginator->lastPage() === 5) {
                $start = 2;
                $end = 4;
            }

            if ($paginator->lastPage() > 5) {
                if ($paginator->currentPage() <= 5) {
                    $start = 2;
                    $end = $paginator->lastPage();
                } else if ($paginator->currentPage() > 5) {
                    $start = $paginator->currentPage() - 4;
                    $end = $start + 8 >= $paginator->lastPage() ? $paginator->lastPage() : $start + 8;
                }
            }

            
        @endphp

        @endif

        @for($start; $start < $end; $start++)
            <li>
                <a 
                    class="pagination-link @if($paginator->currentPage() === $start) is-current @else has-background-white @endif" 
                    @if($paginator->currentPage() != $start) href="{{ $paginator->url($start) }}" @endif>{{ $start }}</a>
            </li>
        @endfor

        @if($paginator->lastPage() > 2)
        <li>
            <span class="pagination-ellipsis">&hellip;</span>
        </li>
        @endif
        <li>
            <a 
                class="pagination-link @if($paginator->lastPage() === $paginator->currentPage()) is-current @else has-background-white @endif" 
                @unless($paginator->currentPage() == $paginator->lastPage()) href="{{ $paginator->url($paginator->lastPage()) }}" @endunless>
                {{ $paginator->lastPage() }}
            </a>
        </li>

    </ul>
</nav>
@endif