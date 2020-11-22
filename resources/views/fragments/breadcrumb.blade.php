<nav class="breadcrumb has-background-primary is-centered" aria-label="breadcrumbs">
    <ul>
        @isset($crumbs)
        @foreach($crumbs as $crumb)
        <li class="@if($loop->last) is-active @endif">
            <a class="has-text-white" href="@isset($crumb['url']) {{ $crumb['url']}} @endisset">{{ __($crumb['label']) }}</a>
        </li>
        @endforeach
        @endisset
    </ul>
</nav>