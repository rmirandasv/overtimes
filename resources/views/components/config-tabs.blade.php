<div class="tabs is-boxed">
    <ul>
        <li @if( $isActive('config')) class="is-active" @endif>
            <a href="{{ route('config.global') }}">{{ __('ui.config.tabs.global') }}</a>
        </li>
        <li @if( $isActive('config/costs*')) class="is-active" @endif>
            <a href="{{ route('config.costs') }}">{{ __('ui.config.tabs.costs') }}</a>
        </li>
    </ul>
</div>