{{-- auth.login --}}
@extends('layouts.app')

@section('title', __('ui.login.windowtitle'))

@section('content')
<section class="section">
    <div class="container">
        <div class="columns is-centered">
            <div class="column is-half">
                @if(session('message'))
                <div class="notification is-danger is-light">
                    {{ session('message') }}
                </div>
                @endif
                <div class="panel">
                    <h1 class="panel-heading">{{ __('ui.login.panel.heading') }}</h1>
                    <div class="panel-block has-background-light">
                        <div class="container">
                            <form method="POST" action="{{ route('authenticate') }}" autocomplete="off">
                                @csrf
                                <div class="field is-horizontal">
                                    <div class="field-label is-normal">
                                        <label for="username" class="label">{{ __('ui.login.form.username') }}</label>
                                    </div>
                                    <div class="field-body">
                                        <div class="field">
                                            <div class="control">
                                                <input type="text" class="input @if($errors->has('username')) is-danger @endif" 
                                                    name="username" id="username" autofocus>
                                                @if($errors->has('username'))
                                                @foreach($errors->get('username') as $error)
                                                <span class="help is-danger">
                                                    {{ $error }}
                                                </span>
                                                @endforeach
                                                @endif
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
                                                <input type="password" class="input @if($errors->has('password')) is-danger @endif" 
                                                    name="password" id="password">
                                                @if($errors->has('password'))
                                                @foreach($errors->get('password') as $error)
                                                <span class="help is-danger">
                                                    {{ $error }}
                                                </span>
                                                @endforeach
                                                @endif
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
            </div>
        </div>
    </div>
</section>
@endsection