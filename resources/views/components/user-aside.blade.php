<aside class="menu has-background-light">
    <ul class="menu-list">
        <li>
            <a class="@if($isActive('users')) is-active @endif" @unless($isActive('users')) href="{{ route('users.index') }}" @endunless>{{ __('ui.users.aside.users.users') }}</a>
        </li>
        <li>
            <a class="@if($isActive('users/create')) is-active @endif" @unless($isActive('users/create')) href="{{ route('users.create') }}" @endunless>{{ __('ui.users.aside.users.create') }}</a>
        </li>
        @if( $isEditing() )
        <li>
            <a class="is-active">
                {{ __('ui.users.aside.users.edit') }}
            </a>
        </li>
        @endif
        @if( $isDeleting() )
        <li>
            <a class="is-active">
                {{ __('ui.users.aside.users.delete')}}
            </a>
        </li>
        @endif
    </ul>
</aside>