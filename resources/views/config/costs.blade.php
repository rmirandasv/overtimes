{{-- config.costs --}}
@extends('layouts.app')

@section('title', __('ui.config.costs.windowtitle'))

@section('breadcrumb')
@include('fragments.breadcrumb', ['crumbs' => [
    ['label' => 'ui.breadcrumbs.config.config'],
    ['label' => 'ui.breadcrumbs.config.costs']
]])
@endsection

@section('content')
<div class="section" id="content">
    <div class="container is-fluid">
        <x-config-tabs/>
        <div class="columns">
            <div class="column is-2">
                <x-config-cost-aside/>
            </div>
            <div class="column">
                @if(session('created'))
                <div class="notification is-success is-light">
                    <button class="delete" @click.prevent="xtimesClose"></button>
                    {{ session('created') }}
                </div>
                @endif
                @if(session('deleted'))
                <div class="notification is-success is-light">
                    <button class="delete" @click.prevent="xtimesClose"></button>
                    {{ session('deleted') }}
                </div>
                @endif
                <div class="table-container">
                    <table class="table is-bordered is-stripped is-fullwidth">
                        <thead>
                            <tr>
                                <th>{{ __('ui.config.costs.table.initial_minute') }}</th>
                                <th>{{ __('ui.config.costs.table.final_minute') }}</th>
                                <th>{{ __('ui.config.costs.table.cost') }}</th>
                                <th>{{ __('ui.config.costs.table.created_at') }}</th>
                                <th>{{ __('ui.config.costs.table.updated_at') }}</th>
                                <th>{{ __('ui.common.actions.delete') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if($config->count() > 0)
                            @foreach($config as $conf)
                            <tr>
                                <td>{{ $conf->initial_minute }}</td>
                                <td>{{ $conf->final_minute }}</td>
                                <td>{{ $conf->cost }}</td>
                                <td>{{ $conf->created_at->diffForHumans() }}</td>
                                <td>{{ $conf->updated_at->diffForHumans() }}</td>
                                <td>
                                    <form method="POST" action="{{ route('config.deletecost') }}">
                                        @csrf
                                        <input type="hidden" value="{{ $conf->id }}" name="cost_id" id="cost_id">
                                        <button class="button is-danger is-light" type="submit">
                                            <span class="icon"><i class="fas fa-trash"></i></span>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                            @else
                            <tr>
                                <td colspan="7" class="has-text-centered has-text-grey">
                                    {{ __('ui.config.costs.table.empty') }}
                                    <a href="{{ route('config.addcost') }}">{{ __('ui.common.actions.create') }}</a>
                                </td>
                            </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection