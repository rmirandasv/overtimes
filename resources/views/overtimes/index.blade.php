{{-- overtimes.index --}}
@extends('layouts.app')

@section('title', __('ui.overtimes.index.windowtitle'))

@section('breadcrumb')
@include('fragments.breadcrumb', ['crumbs' => [
    ['label' => 'ui.breadcrumbs.overtimes.overtimes']
]])
@endsection

@section('content')
<section class="section" id="content">
    <div class="container is-fluid">
        <div class="columns">
            <div class="column is-2">
                <x-overtime-aside/>
            </div>
            <div class="column">
                @if(session('created'))
                    <div class="notification is-success is-light">
                        <button class="delete" @click.prevent="xtimesClose"></button>
                        {{ session('created') }}
                    </div>
                @endif
                {{ $overtimes->links() }}
                <div class="table-container">
                    <table class="table is-bordered is-stripped is-fullwidth">
                        <thead class="has-background-grey-light">
                            <tr>
                                <th>{{ __('ui.overtimes.index.table.employee') }}</th>
                                <th>{{ __('ui.overtimes.index.table.start_time') }}</th>
                                <th>{{ __('ui.overtimes.index.table.finish_time') }}</th>
                                <th>{{ __('ui.overtimes.index.table.overtime_desc') }}</th>
                                <th>{{ __('ui.overtimes.index.table.lasted') }}</th>
                                <th>{{ __('ui.overtimes.index.table.overtime_cost') }}</th>
                                <th>{{ __('ui.overtimes.index.table.created_at') }}</th>
                                <th>{{ __('ui.overtimes.index.table.updated_at') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if($overtimes->count() > 0)
                            @foreach($overtimes as $overtime)
                                <tr>
                                    <td>{{ $overtime->user->fullname }}</td>
                                    <td>{{ $overtime->start_time }}</td>
                                    <td>{{ $overtime->finish_time }}</td>
                                    <td>{{ $overtime->overtime_desc }}</td>
                                    <td>{{ $overtime->worked_minutes }}</td>
                                    <td>{{ $overtime->overtime_cost }}</td>
                                    <td>{{ $overtime->created_at->diffForHumans() }}</td>
                                    <td>{{ $overtime->updated_at->diffForHumans() }}</td>
                                </tr>
                            @endforeach
                            @else
                            <tr>
                                <td colspan="7" class="has-text-grey">
                                    {{ __('ui.overtimes.index.table.empty') }}
                                </td>
                            </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
                {{ $overtimes }}
            </div>
        </div>
    </div>
</section>
@endsection