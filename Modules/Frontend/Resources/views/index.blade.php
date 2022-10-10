<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="{{ asset('frontend/pix/logo1.png') }}" type="image/png">
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}" />
    @if (Settings::get('theme') == 'dark')
        <link class="active-theme" rel="stylesheet" href="{{ asset('frontend/css/dark.css') }}" />
    @else
        <link class="active-theme" rel="stylesheet" href="{{ asset('frontend/css/light.css') }}" />
    @endif
    <style>
        .landing {
            height: 100vh;
            background-image: url("{{ Settings::instance('cover')->getFirstMediaUrl('cover') }}");
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
        }
    </style>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet" />

    <title>
        {{ env('APP_NAME') }}
    </title>
</head>

<body>
    @include('frontend::includes.theme')
    <!-- start nav  -->
    @include('frontend::includes.nav')
    <!-- end nav  -->
    <!-- start Landing page -->
    <section class="landing d-flex justify-content-center text-light">
        <div class="l-c d-flex justify-content-center align-items-center text-center">
            <div class="container">
                <h2>Shady Gaber Media Agency</h2>

                <p class="lead">
                    Making Your Marketing So Useful, People Would Pay For It.
                </p>
                <button class="btn btn-dark">
                    <a href="{{ route('contact') }}">Contact Us</a>
                </button>
            </div>
        </div>
    </section>
    <!-- end Landing page -->
    <!-- about-US start  -->
    <section class="about-us text-center">
        <h2 class="text-light">About Us</h2>
        <span></span>
        <p class="lead text-light">
            {!! $settings->about_us_desc !!}
        </p>
    </section>
    <!-- about-US end  -->
    <!-- Our-services start  -->
    <section class="services text-center">
        <h2>Our Services</h2>
        <span></span>
        <div class="container">
            <div class="row cont">
                @forelse ($services as $service)
                    <div class="col">
                        <div class="card">
                            <img class="img-fluid" src="{{ $service->getFirstMediaUrl('images') }}" alt="" />
                            <div class="card-con">
                                <h3>{{ $service->name }}</h3>
                            </div>
                            <a href="#portfolio" data-filter="all"><button>Show More</button></a>
                        </div>
                    </div>
                @empty
                @endforelse
            </div>
        </div>
    </section>

    <!-- Our-services end  -->
    <!-- our vision start -->
    <section class="our-vision text-center">
        <h2 class="text-light">Our Vision</h2>
        <span></span>
        <p class="lead text-light">
            {!! $settings->our_vision !!}
        </p>
    </section>
    <!-- our vision end -->
    <!-- portofolio start  -->
    @include('frontend::includes.portfolio')
    <!-- portofolio end  -->
    <!-- our-mission start  -->
    <section class="our-mission text-center">
        <h2 class="text-light">Our Mission</h2>
        <span></span>
        <p class="lead text-light">
            {!! $settings->our_mission !!}
        </p>
    </section>
    <!-- our-mission end  -->
    <!-- our partner start  -->
    <div class="our-partner">
        <div class="slider">
            @forelse ($partners as $partner)
                <div class="slide"><img src="{{ $partner->getFirstMediaUrl('images') }}" alt="" /></div>
            @empty
            @endforelse
        </div>
    </div>
    <!-- our partner end  -->

    <!-- footer start  -->
    @include('frontend::includes.footer')
    <!-- footer end  -->

    <!-- scripts start -->
    @include('frontend::includes.scripts')
    <!-- scripts end -->
</body>

</html>
