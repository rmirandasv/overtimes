{{-- users.index --}}
@extends('layouts.app')

@section('title', __('ui.users.index.windowtitle'))

@section('breadcrumb')
@include('fragments.breadcrumb', ['crumbs' => [
    ['label' => 'ui.breadcrumbs.users.users']
]])
@endsection

@section('content')
<div class="section">
    <div class="container is-fluid">
        <div class="columns">
            <div class="column is-2">
                <x-user-aside/>
            </div>
            <div class="column">
                <table class="table is-striped is-bordered is-fullwidth">
                    <thead class="has-background-grey-light">
                        <tr>
                            <th>{{ __('ui.users.index.table.name') }}</th>
                            <th>{{ __('ui.users.index.table.username') }}</th>
                            <th>{{ __('ui.users.index.table.active') }}</th>
                            <th>{{ __('ui.users.index.table.locked') }}</th>
                            <th>{{ __('ui.users.index.table.createdAt') }}</th>
                            <th>{{ __('ui.users.index.table.updatedAt') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($users->count() > 0)
                        @foreach($users as $user)
                        <tr>
                            <td>{{ $user->fullname }}</td>
                            <td>{{ $user->username }}</td>
                            <td>{{ $user->active }}</td>
                            <td>{{ $user->locked }}</td>
                            <td>{{ $user->created_at->diffForHumans() }}</td>
                            <td>{{ $user->updated_at->diffForHumans() }}</td>
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
        </div>
    </div>
</div>
@endsection