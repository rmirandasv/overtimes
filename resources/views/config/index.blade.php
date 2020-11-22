{{-- overtimes.index --}}
@extends('layouts.app')

@section('title', __('ui.config.index.windowtitle'))

@section('breadcrumb')
@include('fragments.breadcrumb', ['crumbs' => [
    ['label' => 'ui.breadcrumbs.config.config']
]])
@endsection

@section('content')
config
@endsection