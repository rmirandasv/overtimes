{{-- users.edit --}}
@extends('layouts.app')

@section('title', __('ui.users.edit.windowtitle'))

@section('breadcrumb')
@include('fragments.breadcrumb', ['crumbs' => [
    ['label' => 'ui.breadcrumbs.users.users', 'url' => route('users.index')],
    ['label' => 'ui.breadcrumbs.users.edit']
]])
@endsection

@section('content')
<div class="section" id="content">
    <div class="container-fluid">
        <div class="columns">
            <div class="column is-2">
                <x-user-aside/>
            </div>
            <div class="column">
                <form method="POST" autocomplete="off">
                    @csrf
                    <div class="field is-horizontal">
                        <div class="field-label is-normal">
                            <label for="name" class="label">{{ __('ui.users.create.form.name') }}</label>
                        </div>
                        <div class="field-body">
                            <div class="field">
                                <div class="control">
                                    <input type="text" class="input @error('name')is-danger @enderror" id="name" 
                                        name="name" placeholder="{{ __('ui.users.create.form.placeholder.name') }}" 
                                        value="{{ old('name') ?? $user->name }}" autofocus>
                                    @if($errors->has('name'))
                                    @foreach($errors->get('name') as $error)
                                    <span class="help is-danger">{{ $error }}</span>
                                    @endforeach
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="field is-horizontal">
                        <div class="field-label is-normal">
                            <label for="last_name" class="label">{{ __('ui.users.create.form.last_name') }}</label>
                        </div>
                        <div class="field-body">
                            <div class="field">
                                <div class="control">
                                    <input type="text" class="input @error('last_name')is-danger @enderror" id="last_name" 
                                        name="last_name" placeholder="{{ __('ui.users.create.form.placeholder.last_name') }}"
                                        value="{{ old('last_name') ?? $user->last_name }}">
                                    @if($errors->has('last_name'))
                                    @foreach($errors->get('last_name') as $error)
                                    <span class="help is-danger">{{ $error }}</span>
                                    @endforeach
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="field is-horizontal">
                        <div class="field-label is-normal">
                            <label for="username" class="label">{{ __('ui.users.create.form.username') }}</label>
                        </div>
                        <div class="field-body">
                            <div class="field">
                                <div class="control">
                                    <input type="text" class="input @error('username')is-danger @enderror" id="username" 
                                        name="username" placeholder="{{ __('ui.users.create.form.placeholder.username') }}"
                                        value="{{ old('username') ?? $user->username }}">
                                    @if($errors->has('username'))
                                    @foreach($errors->get('username') as $error)
                                    <span class="help is-danger">{{ $error }}</span>
                                    @endforeach
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="field is-horizontal">
                        <div class="field-label is-normal">
                            <label for="password" class="label">{{ __('ui.users.create.form.password') }}</label>
                        </div>
                        <div class="field-body">
                            <div class="field">
                                <div class="control">
                                    <input type="password" class="input @error('password')is-danger @enderror" id="password" 
                                        name="password" placeholder="{{ __('ui.users.create.form.placeholder.password') }}">
                                    <span class="help is-grey">{{ __('ui.users.edit.form.passwordblank') }}</span>
                                    @if($errors->has('password'))
                                    @foreach($errors->get('password') as $error)
                                    <span class="help is-danger">{{ $error }}</span>
                                    @endforeach
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="field is-horizontal">
                        <div class="field-label is-normal">
                            <label for="role_id" class="label">{{ __('ui.users.create.form.role') }}</label>
                        </div>
                        <div class="field-body">
                            <div class="field">
                                <div class="control">
                                    <div class="select">
                                        <select name="role_id" id="role_id">
                                            @if($roles->count() > 0)
                                            @foreach($roles as $role)
                                            <option @if( old('role_id') == $role->id || $user->role->id === $role->id) selected @endif value="{{ $role->id }}">{{ __('ui.security.roles.'.$role->role) }}</option>
                                            @endforeach
                                            @else
                                            <option value="" disabled>{{ __('ui.users.create.form.empty_roles') }}</option>
                                            @endif
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="field is-horizontal">
                        <div class="field-label is-normal"></div>
                        <div class="field-body">
                            <div class="field">
                                <div class="control">
                                    <button type="submit" class="button is-primary">{{ __('ui.common.actions.save') }}</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection