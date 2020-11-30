{{-- overtimes.index --}}
@extends('layouts.app')

@section('title', __('ui.config.index.windowtitle'))

@section('breadcrumb')
@include('fragments.breadcrumb', ['crumbs' => [
    ['label' => 'ui.breadcrumbs.config.config']
]])
@endsection

@section('content')
<div class="section" id="content">
    <div class="container is-fluid">
        <x-config-tabs/>
        <div class="columns">
            <div class="column is-2"></div>
            <div class="column">
                @if(session('updated'))
                <div class="notification is-success is-light">
                    <button class="delete" @click.prevent="xtimesClose"></button>
                    {{ session('updated') }}
                </div>
                @endif
                <form method="POST" action="{{ route('config.storeglobal') }}" autocomplete="off">
                    @csrf
                    <div class="field">
                        <label for="public_costs" class="label">{{ __('ui.config.index.form.public') }}</label>
                        <div class="control">
                            <label class="checkbox">
                                <input type="checkbox" @if($config->find(1)->value === 'T') checked @endif 
                                    name="public_overtimes" id="public_overtimes">
                                {{ __('ui.config.index.form.is_public') }}
                            </label>
                        </div>
                    </div>
                    <div class="field">
                        <label class="label" for="login_attemps">{{ __('ui.config.index.form.login_attemps') }}</label>
                        <div class="field">
                            <input type="text" class="input @if($errors->has('login_attempts')) @endif" 
                                name="login_attempts" id="login_attempts" 
                                value="{{ $config->find(2)->value }}">
                        </div>
                    </div>
                    <div class="field">
                        <button type="submit" class="button is-primary">{{ __('ui.common.actions.save') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection