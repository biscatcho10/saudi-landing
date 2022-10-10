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
    <section class="our-task text-center">
        <h2>Our Task</h2>
        <span></span>
        <p class="lead">
            {!! $settings->our_tasks !!}
        </p>
    </section>
    <!-- our-mission end  -->
    <!-- portofolio start  -->
    @include('frontend::includes.portfolio')
    <!-- portofolio end  -->
    <!-- footer start  -->
    @include('frontend::includes.footer')
    <!-- footer end  -->

    <!-- scripts start -->
    @include('frontend::includes.scripts')
    <!-- scripts end -->
</body>

</html>
