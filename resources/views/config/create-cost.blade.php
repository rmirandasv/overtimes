{{-- config.create-cost --}}
@extends('layouts.app')

@section('title', __('ui.config.costs.create.windowtitle'))

@section('breadcrumb')
@include('fragments.breadcrumb', ['crumbs' => [
    ['label' => 'ui.breadcrumbs.config.config', 'url' => route('config.global')],
    ['label' => 'ui.breadcrumbs.config.costs', 'url' => route('config.costs')],
    ['label' => 'ui.breadcrumbs.config.addcost']
]])
@endsection

@section('content')
<section class="section">
    <div class="container is-fluid">
        <x-config-tabs/>
        <div class="columns">
            <div class="column is-2">
                <x-config-cost-aside/>
            </div>
            <div class="column">
                <form method="POST" action="{{ route('config.storecost') }}" autocomplete="off">
                    @csrf
                    <div class="field is-horizontal">
                        <div class="field-label is-normal">
                            <label for="initial_minute" class="label">{{ __('ui.config.costs.create.form.initial_minute') }}</label>
                        </div>
                        <div class="field-body">
                            <div class="field">
                                <div class="control">
                                    <input type="number" class="input @if($errors->has('initial_minute')) is-danger @endif"
                                        value="{{ old('initial_minute') }}" name="initial_minute" id="initial_minute"
                                        placeholder="{{ __('ui.config.costs.create.form.placeholder.initial_minute') }}">
                                    @if($errors->has('initial_minute'))
                                    @foreach($errors->get('initial_minute') as $error)
                                    <span class="help is-danger">{{ $error }}</span>
                                    @endforeach
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="field is-horizontal">
                        <div class="field-label is-normal">
                            <label for="final_minute" class="label">{{ __('ui.config.costs.create.form.final_minute') }}</label>
                        </div>
                        <div class="field-body">
                            <div class="field">
                                <div class="control">
                                    <input type="number" class="input @if($errors->has('final_minute')) is-danger @endif"
                                        value="{{ old('final_minute') }}" name="final_minute" id="final_minute"
                                        placeholder="{{ __('ui.config.costs.create.form.placeholder.final_minute') }}">
                                    @if($errors->has('final_minute'))
                                    @foreach($errors->get('final_minute') as $error)
                                    <span class="help is-danger">
                                        {{ $error }}
                                    </span>
                                    @endforeach
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="field is-horizontal">
                        <div class="field-label is-normal">
                            <label for="cost" class="label">{{ __('ui.config.costs.create.form.cost') }}</label>
                        </div>
                        <div class="field-body">
                            <div class="field">
                                <div class="control">
                                    <input type="number" class="input @if($errors->has('cost')) is-danger @endif"
                                        value="{{ old('cost') }}" name="cost" id="cost"  step=".01" placeholder="00.00">
                                    @if($errors->has('cost'))
                                    @foreach($errors->get('cost') as $error)
                                    <span class="help is-danger">
                                        {{ $error }}
                                    </span>
                                    @endforeach
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="field is-horizontal">
                        <div class="field-label is-normal"></div>
                        <div class="field-body">
                            <div class="field">
                                <div class="control">
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