{{-- auth.login --}}
@extends('layouts.app')

@section('title', __('ui.login.windowtitle'))

@section('content')
<section class="section">
    <div class="container">
        <div class="columns">
            <div class="column">
                <form method="POST" action="{{ route('authenticate') }}" autocomplete="off">
                    @csrf
                    <div class="field is-horizontal">
                        <div class="field-label is-normal">
                            <label for="username" class="label">{{ __('ui.login.form.username') }}</label>
                        </div>
                        <div class="field-body">
                            <div class="field">
                                <div class="control">
                                    <input type="text" class="input" name="username" id="username" autofocus>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="field is-horizontal">
                        <div class="field-label is-normal">
                            <label for="password" class="label">{{ __('ui.login.form.password') }}</label>
                        </div>
                        <div class="field-body">
                            <div class="field">
                                <div class="control">
                                    <input type="password" class="input" name="password" id="password">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="field is-horizontal">
                        <div class="field-label"></div>
                        <div class="field-body">
                            <div class="field">
                                <div class="control">
                                    <button class="button is-primary" type="submit">{{ __('ui.common.actions.login') }}</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection