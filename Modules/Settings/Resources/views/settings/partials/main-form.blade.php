@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

{{ BsForm::text('exhibtion_name')->value(Settings::get('exhibtion_name'))->attribute(['data-parsley-maxlength' => '191', 'data-parsley-minlength' => '3']) }}
{{ BsForm::text('name')->value(Settings::get('name'))->attribute(['data-parsley-maxlength' => '191', 'data-parsley-minlength' => '3'])->label('name') }}
{{ BsForm::text('title')->value(Settings::get('title'))->attribute(['data-parsley-maxlength' => '191', 'data-parsley-minlength' => '3'])->label('Title') }}
{{ BsForm::textarea('description')->rows(3)->attribute('class', 'form-control')->value(Settings::get('description'))->attribute(['data-parsley-minlength' => '3'])->label('Description') }}


<div class="row mb-3">
    <div class="col-md-6">
        <label>{{ __('settings::settings.attributes.logo') }}</label>
        @include('dashboard::layouts.apps.file1', [
            'file' => optional(Settings::instance('logo'))->getFirstMediaUrl('logo'),
            'name' => 'logo',
        ])
    </div>
    <div class="col-md-6">
        <label>{{ __('settings::settings.attributes.favicon') }}</label>
        @include('dashboard::layouts.apps.file1', [
            'file' => optional(Settings::instance('favicon'))->getFirstMediaUrl('favicon'),
            'name' => 'favicon',
        ])
    </div>
    <div class="col-md-6">
        <label>{{ __('settings::settings.attributes.loginLogo') }}</label>
        @include('dashboard::layouts.apps.file1', [
            'file' => optional(Settings::instance('loginLogo'))->getFirstMediaUrl('loginLogo'),
            'name' => 'loginLogo',
        ])
    </div>
    <div class="col-md-6">
        <label>{{ __('settings::settings.attributes.loginBackground') }}</label>
        @include('dashboard::layouts.apps.file1', [
            'file' => optional(Settings::instance('loginBackground'))->getFirstMediaUrl('loginBackground'),
            'name' => 'loginBackground',
        ])
    </div>
</div>
