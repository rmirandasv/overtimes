{{-- users.create --}}
@extends('layouts.app')

@section('title', __('ui.users.create.windowtitle'))

@section('breadcrumb')
@include('fragments.breadcrumb', ['crumbs' => [
    ['label' => 'ui.breadcrumbs.users.create']
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
                create page
            </div>
        </div>
    </div>
</div>
@endsection