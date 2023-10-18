<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>{{ site_name() }}</title>
    <link rel="shortcut icon" href="{{ app_favicon() }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/thanks.css') }}" />
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400|Montserrat:700" rel="stylesheet" type="text/css" />
    @notifyCss

    <title>{{ Settings::get('seo_title') }}</title>
    <meta name="description" content="{{ Settings::get('seo_desc') }}">
    <meta name="keywords" content="{{ Settings::get('key_words') }}">
    {!! Settings::get('google_analects') !!}
    {!! Settings::get('facebook_pixel') !!}
    {!! Settings::get('google_id_head') !!}
    {!! Settings::get('google_tag_manger') !!}
    {!! Settings::get('hotjar') !!}
    {!! Settings::get('linked_tag') !!}

</head>

<body>
    <div id="thanks">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="logo d-flex">
                        <img src="{{ app_logo() }}" alt="" />
                    </div>
                </div>
                <div class="col-12">
                    <header class="site-header" id="header">
                        <h1 class="site-header__title" data-lead-id="site-header-title">
                            {{ Settings::get('thank_title') }}
                        </h1>
                    </header>
                </div>
                <div class="col-12">
                    <div class="main-content">
                        <i class="fa fa-check main-content__checkmark" id="checkmark"></i>
                        <p class="main-content__body" data-lead-id="main-content-body">
                            {{ Settings::get('thank_desc') }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End section contact  -->
    {!! Settings::get('google_id_footer') !!}

    <!-- scripts end -->
    @include('notify::components.notify')
    @notifyJs
</body>

</html>
