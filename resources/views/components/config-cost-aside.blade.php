<aside class="menu has-background-light">
    <ul class="menu-list">
        <li>
            <a @if($isActive('config/costs')) class="is-active" @endif
                href="{{ route('config.costs') }}">
                {{ __('ui.config.costs.aside.current') }}
            </a>
        </li>
        <li>
            <a @if($isActive('config/costs/create')) class="is-active" @endif
                href="{{ route('config.addcost') }}">
                {{ __('ui.config.costs.aside.create') }}
            </a>
        </li>
    </ul>
</aside>