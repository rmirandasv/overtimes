<aside class="mennu has-background-light">
    <ul class="menu-list">
        <li>
            <a @if($isActive('overtimes')) class="is-active" @endif href="{{ route('overtimes.index') }}">{{ __('ui.overtimes.aside.all') }}</a>
        </li>
        <li>
            <a @if($isActive('overtimes/register')) class="is-active" @endif href="{{ route('overtimes.create') }}">
                {{ __('ui.overtimes.aside.register') }}
            </a>
        </li>
    </ul>
</aside>