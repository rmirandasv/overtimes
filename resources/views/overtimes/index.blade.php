{{-- overtimes.index --}}
@extends('layouts.app')

@section('title', __('ui.overtimes.index.windowtitle'))

@section('breadcrumb')
@include('fragments.breadcrumb', ['crumbs' => [
    ['label' => 'ui.breadcrumbs.overtimes.overtimes']
]])
@endsection

@section('content')
overtimes
@endsection