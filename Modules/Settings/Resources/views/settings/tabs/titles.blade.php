@extends('dashboard::layouts.default')

@section('title')
    @lang('Thanks Page')
@endsection

@section('content')
    @component('dashboard::layouts.components.page')
        @slot('title', trans('settings::settings.actions.update'))
        @slot('breadcrumbs', ['dashboard.settings.update'])

        {{ BsForm::resource('settings::settings')->put(route('dashboard.settings.update1'), ['files' => true]) }}
        @component('dashboard::layouts.components.box')

            @slot('title', trans('Thanks Page'))

            @include('settings::settings.partials.titles-form')

            {{ BsForm::submit()->label(trans('settings::settings.actions.save'))->attribute('class','btn btn-danger mb-2') }}
        @endcomponent
        {{ BsForm::close() }}

    @endcomponent
@endsection

