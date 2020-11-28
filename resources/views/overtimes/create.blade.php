{{-- overtimes.create --}}
@extends('layouts.app')

@section('title', __('ui.overtimes.create.windowtitle'))

@section('breadcrumb')
@include('fragments.breadcrumb', ['crumbs' => [
    ['label' => 'ui.breadcrumbs.overtimes.overtimes', 'url' => route('overtimes.index')],
    ['label' => 'ui.breadcrumbs.overtimes.register']
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
                <form method="POST" action="{{ route('overtimes.store') }}" autocomplete="off">
                    @csrf
                    <div class="field is-horizontal">
                        <div class="field-label is-normal">
                            <label for="employee" class="label">{{ __('ui.overtimes.create.form.employee') }}</label>
                        </div>
                        <div class="field-body">
                            <div class="field">
                                <div class="control">
                                    <div class="select">
                                        <select name="employee" id="employee">
                                            @foreach($employees as $employee)
                                            <option value="{{ $employee->id }}">{{ $employee->fullname}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="field is-horizontal">
                        <div class="field-label is-normal">
                            <label for="start_time" class="label">{{ __('ui.overtimes.create.form.start_date') }}</label>
                        </div>
                        <div class="field-body">
                            <div class="field">
                                <div class="control">
                                    <input type="date" class="input @if($errors->has('start_date')) is-danger @endif"
                                        name="start_date" id="start_date"
                                        value="{{ old('start_date') }}">
                                    @if($errors->has('start_date'))
                                    @foreach($errors->get('start_date') as $error)
                                    <span class="help is-danger">{{ $error}}</span>
                                    @endforeach
                                    @endif
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input type="time" class="input @if($errors->has('start_time')) is-danger @endif"
                                        value="{{ old('start_time') }}" name="start_time">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="field is-horizontal">
                        <div class="field-label is-normal">
                            <label for="finish_time" class="label">{{ __('ui.overtimes.create.form.finish_date') }}</label>
                        </div>
                        <div class="field-body">
                            <div class="field">
                                <div class="control">
                                    <input type="date" class="input @if($errors->has('finish_time')) is-danger @endif"
                                        name="finish_time" id="finish_time"
                                        value="{{ old('finish_time') }}">
                                    @if($errors->has('start_time'))
                                    @foreach($errors->get('finish_time') as $error)
                                    <span class="help is-danger">{{ $error}}</span>
                                    @endforeach
                                    @endif
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input type="time" class="input @if($errors->has('finish_time')) is-danger @endif"
                                        value="{{ old('finish_time') }}" name="finish_time" id="finish_time">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="field is-horizontal">
                        <div class="field-label is-normal">
                            <label for="overtime_desc" class="label">{{ __('ui.overtimes.create.form.overtime_desc') }}</label>
                        </div>
                        <div class="field-body">
                            <div class="field">
                                <div class="control">
                                    <textarea name="overtime_desc" id="overtime_desc" cols="30" rows="10" class="texarea"
                                        value="{{ old('overtime_desc') }}"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="field is-horizontal">
                        <div class="field-label is-normal"></div>
                        <div class="field-body">
                            <div class="field">
                                <div class="contorl">
                                    <button class="button is-primary" type="submit">{{ __('ui.common.actions.save') }}</button>
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