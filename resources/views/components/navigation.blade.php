<nav class="navbar is-primary" role="navigation" aria-label="{{ __('arialabel.navbar.mainnavigation') }}">
    <div class="navbar-brand">
        <a class="navbar-item is-uppercase is.italic has-text-warning has-text-font-weight-bold" href="{{ config('app.url') }}">
            {{ config('app.name')}}
        </a>
        <a role="button" class="navbar-burger burger" aria-label="menu">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
        </a>
    </div>
    <div class="navbar-menu">
        @if(auth()->check())
        <div class="navbar-start">
            <a class="navbar-item @if($isActive('overtimes')) is-active @endif" href="{{ route('overtimes.index') }}">
                {{ __('ui.navbar.overtimes.overtimes') }}
            </a>
            <a class="navbar-item @if($isActive('users')) is-active @endif" href="{{ route('users.index') }}">
                {{ __('ui.navbar.users.users') }}
            </a>
            <a class="navbar-item @if($isActive('config')) is-active @endif" href="{{ route('config.global') }}">
                {{ __('ui.navbar.config.config') }}
            </a>
        </div>
        @endif
        @if(auth()->check())
        <div class="navbar-end">
            <a class="navbar-item">
                {{ auth()->user()->fullname }}
            </a>
            <a class="navbar-item" href="{{ route('logout') }}">{{ __('ui.login.logout') }}</a>
        </div>
        @endif
    </div>
</nav>