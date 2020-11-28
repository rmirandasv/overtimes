{{-- users.delete --}}
@extends('layouts.app')

@section('title', __('ui.users.delete.windowtitle'))

@section('breadcrumb')
@include('fragments.breadcrumb', ['crumbs' => [
    ['label' => 'ui.breadcrumbs.users.users', 'url' => route('users.index')],
    ['label' => 'ui.breadcrumbs.users.delete']
]])
@endsection

@section('content')
<section class="section" id="content">
    <div class="container is-fluid">
        <div class="columns">
            <div class="column is-2">
                <x-user-aside/>
            </div>
            <div class="column">
                <form method="POST" action="{{ route('users.delete', ['userId' => $user->id]) }}">
                    @csrf
                    <div class="field is-horizontal">
                        <div class="field-label is-normal">
                            <label for="name" class="label">{{ __('ui.users.create.form.name') }}</label>
                        </div>
                        <div class="field-body">
                            <div class="field">
                                <div class="control">
                                    <input type="text" class="input" id="name" 
                                        name="name"  value="{{ $user->name }}" disabled readonly>
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
                                    <input type="text" class="input" id="last_name" 
                                        name="last_name" value="{{ $user->last_name }}" disabled readonly>
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
                                    <input type="text" class="input" id="username" 
                                        name="username" value="{{ $user->username }}" disabled readonly>
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
                                    <input type="text" class="input" 
                                        value="{{ __('ui.security.roles.' . $user->role->role) }}" disabled readonly>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="field is-horizontal">
                        <div class="field-label is-normal"></div>
                        <div class="field-body">
                            <div class="field">
                                <div class="control">
                                    <button type="submit" class="button is-danger">{{ __('ui.common.actions.delete') }}</button>
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