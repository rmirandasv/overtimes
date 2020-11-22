<aside class="menu has-background-light">
    <ul class="menu-list">
        <li>
            <a class="@if($isActive('users')) is-active @endif" href="{{ route('users.index') }}">{{ __('ui.users.aside.users.users') }}</a>
        </li>
        <li>
            <a class="@if($isActive('users/create')) is-active @endif" href="{{ route('users.create') }}">{{ __('ui.users.aside.users.create') }}</a>
        </li>
    </ul>
</aside>