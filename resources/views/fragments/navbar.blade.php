{{-- fragments.navbar --}}
<nav class="navbar is-primary" role="navigation" aria-label="{{ __('ui.arialabel.navbar.mainnavigation') }}">
    <div class="navbar-brand">
        <a class="navbar-item">
            {{ strtoupper(config('app.name')) }}
        </a>
        <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
        </a>
    </div>
    <div class="navbar-start">
        <a class="navbar-item" href="{{ route('users.index') }}">{{ __('ui.navbar.dashboard') }}</a>
        <a class="navbar-item" href="{{ route('users.index') }}">{{ __('ui.navbar.users.users') }}</a>
        <a class="navbar-item" href="#">{{ __('ui.navbar.overtimes.overtimes') }}</a>
        <a class="navbar-item" href="#">{{ __('ui.navbar.config.config') }}</a>
    </div>
    <div class="navbar-end">
        <a class="navbar-item">Usuario logueado</a>
    </div>
</nav>