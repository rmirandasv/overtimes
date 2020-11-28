{{-- users.index --}}
@extends('layouts.app')

@section('title', __('ui.users.index.windowtitle'))

@section('breadcrumb')
@include('fragments.breadcrumb', ['crumbs' => [
['label' => 'ui.breadcrumbs.users.users']
]])
@endsection

@section('content')
<div class="section" id="content">
    <div class="container is-fluid">
        <div class="columns">
            <div class="column is-2">
                <x-user-aside />
            </div>
            <div class="column">
                @if(session('success'))
                <div class="notification is-success is-light">
                    <button class="delete" @click.prevent="xtimesClose"></button>
                    {{ session('success') }}
                </div>
                @endif
                @if(session('enabled'))
                <div class="notification is-success is-light">
                    <button class="delete" @click.prevent="xtimesClose"></button>
                    {{ session('enabled') }}
                </div>
                @endif
                @if(session('disabled'))
                <div class="notification is-success is-light">
                    <button class="delete" @click.prevent="xtimesClose"></button>
                    {{ session('disabled') }}
                </div>
                @endif
                @if(session('unlocked'))
                <div class="notification is-success is-light">
                    <button class="delete" @click.prevent="xtimesClose"></button>
                    {{ session('unlocked') }}
                </div>
                @endif
                @if(session('updated'))
                <div class="notification is-success is-light">
                    <button class="delete" @click.prevent="xtimesClose"></button>
                    {{ session('updated') }}
                </div>
                @endif
                @if(session('deleted'))
                <div class="notification is-success is-light">
                    <button class="delete" @click.prevent="xtimesClose"></button>
                    {{ session('deleted') }}
                </div>
                @endif
                {{ $users->links('fragments.pagination') }}
                <div class="table-container my-0">
                    <table class="table is-striped is-bordered is-fullwidth">
                        <thead class="has-background-grey-light">
                            <tr>
                                <th>{{ __('ui.users.index.table.name') }}</th>
                                <th>{{ __('ui.users.index.table.username') }}</th>
                                <th>{{ __('ui.users.index.table.active') }}</th>
                                <th>{{ __('ui.users.index.table.locked') }}</th>
                                <th>{{ __('ui.users.index.table.role') }}</th>
                                <th>{{ __('ui.users.index.table.createdAt') }}</th>
                                <th>{{ __('ui.users.index.table.updatedAt') }}</th>
                                <th>{{ __('ui.common.actions.edit') }}</th>
                                <th>{{ __('ui.common.actions.delete') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if($users->count() > 0)
                            @foreach($users as $user)
                            <tr>
                                <td>{{ $user->fullname }}</td>
                                <td>{{ $user->username }}</td>
                                <td>
                                    <form method="POST"
                                        action="{{ $user->active ? route('users.disable', ['userId' => $user->id]) : route('users.enable', ['userId' => $user->id]) }}">
                                        @csrf
                                        <button type="submit" class="button is-light is-link" type="submit"
                                            title="{{ $user->active ? __('ui.users.actions.disable') : __('ui.users.actions.enable') }}">
                                            @if($user->active)
                                            <span class="icon"><i class="fa fa-check-square" aria-hidden="true"></i></span>
                                            @else
                                            <span class="icon"><i class="fa fa-times" aria-hidden="true"></i></span>
                                            @endif
                                        </button>
                                    </form>
                                </td>
                                <td>
                                    <form method="POST"
                                        action="{{route('users.unlock', ['userId' => $user->id]) }}">
                                        @csrf
                                        @unless($user->locked)
                                        <span class="has-text-weight-bold">{{ __('ui.users.index.table.unlocked') }}</span>
                                        @endunless
                                        @if($user->locked)
                                        <button class="button is-light is-link" type="submit"
                                            title="{{ __('ui.users.actions.unlock') }}">
                                            <span class="icon"><i class="fas fa-unlock"></i></span>
                                        </button>
                                        @endif
                                    </form>
                                </td>
                                <td>
                                    {{ __('ui.security.roles.' .$user->role->role) }}
                                </td>
                                <td title="{{ $user->created_at }}">{{ $user->created_at->diffForHumans() }}</td>
                                <td title="{{ $user->updated_at }}">{{ $user->updated_at->diffForHumans() }}</td>
                                <td>
                                    <a href="{{ route('users.edit', ['userId' => $user->id]) }}" class="button is-link is-light"><i class="fas fa-edit"></i></a>
                                </td>
                                <td>
                                    <a href="{{ route('users.showDelete' , ['userId' => $user->id]) }}" class="button is-danger is-light"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                            @endforeach
                            @else
                            <tr>
                                <td colspan="2">
                                    Vacio
                                </td>
                            </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
                {{ $users->links('fragments.pagination') }}
            </div>
        </div>
    </div>
</div>
@endsection