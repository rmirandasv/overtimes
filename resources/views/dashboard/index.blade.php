{{-- dashboard.index --}}
@extends('layouts.app')

@section('title', __('ui.dashboard.index.windowtitle'))

@section('breadcrumb')
@include('fragments.breadcrumb', ['crumbs' => [
    ['label' => 'ui.breadcrumbs.dashboard.dashboard']
]])
@endsection

@section('content')
dashbord
@endsection