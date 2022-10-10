<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @include('frontend::includes.styles')

    <title>
        {{ env('APP_NAME') }}
    </title>
</head>

<body>
    @include('frontend::includes.theme')
    <!-- start nav  -->
    @include('frontend::includes.nav')
    <!-- end nav  -->
    <!-- our-mission start  -->
    <section class="about-us text-center">
        <h2 class="text-light">About Us</h2>
        <span></span>
        <p class="lead text-light">
            <span class="not">
                {{ $settings->about_us_title }}
            </span> <br />
            {{ $settings->about_us_sub_title }}
            <br />
            {!! $settings->about_us_desc !!}
        </p>
    </section>
    <!-- our-mission end  -->
    <!-- why-us start  -->
    <section class="why-us text-center">
        <div class="l-c">
            <h2 class="text-dark">Why Us</h2>
            <span></span>
            <div class="container">
                <div class="sec-cont">
                    <div class="row">
                        @foreach ($reasons as $num => $reason)
                            <div class="col-md-6 g
                            @if ($num % 2 == 0)
                            left
                            @else
                            right
                            @endif">
                                <p>
                                    {{$reason->reason }}
                                </p>
                            </div>
                            <div class="col-md-6 g"></div>
                            <div class="col-md-6 g"></div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- why-us end -->
    <!-- footer start  -->
    @include('frontend::includes.footer')
    <!-- footer end  -->

    <!-- scripts start -->
    @include('frontend::includes.scripts')
    <!-- scripts end -->
</body>

</html>
