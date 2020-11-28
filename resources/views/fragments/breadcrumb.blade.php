<nav class="breadcrumb has-background-light" aria-label="breadcrumbs">
    <div class="container">
        <ul>
            @isset($crumbs)
            @foreach($crumbs as $crumb)
            <li class="@if($loop->last)is-active @endif">
                <a class="" href="@isset($crumb['url']) {{ $crumb['url']}} @endisset">{{ __($crumb['label']) }}</a>
            </li>
            @endforeach
            @endisset
        </ul>
    </div>
</nav>