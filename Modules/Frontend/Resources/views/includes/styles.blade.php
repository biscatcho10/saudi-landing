<link rel="icon" href="{{ asset('frontend/pix/logo1.png') }}" type="image/png">
<link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}" />
<link rel="stylesheet" href="{{ asset('frontend/css/all.min.css') }}" />
<link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}" />
<link rel="stylesheet" href="{{ asset('frontend/css/sidePages.css') }}" />
@if (Settings::get('theme') == 'dark')
    <link class="active-theme" rel="stylesheet" href="{{ asset('frontend/css/dark.css') }}" />
@else
    <link class="active-theme" rel="stylesheet" href="{{ asset('frontend/css/light.css') }}" />
@endif
<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet" />
