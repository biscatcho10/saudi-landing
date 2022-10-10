<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @include('frontend::includes.styles')
    @notifyCss

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
    <section class="our-mission text-center">
        <h2 class="text-light">Our Mission</h2>
        <span></span>
        <p class="lead text-light">
            {{ $settings->our_mission }}
        </p>
    </section>
    <!-- our-mission end  -->
    <!-- details start  -->
    <div class="details text-light">
        <ul class="list-unstyled text-light">
            <li> <a href="tel:{{ Settings::get('phone') }}"><i class="fa-solid fa-phone"></i></a></li>
            <li><a href="https://api.whatsapp.com/send?phone={{ Settings::get('whats_app') }}" target="_blank"><i
                        class="fa-brands fa-whatsapp"></i></a></li>
            <li><a href="{{ Settings::get('facebook') }}" target="_blank"><i class="fa-brands fa-facebook"></i></a></li>
        </ul>
    </div>
    <!-- detatails end  -->

    <!-- start contact us  -->
    <div class="contact-us text-center pt-5  ">
        <div class="glass pt-5 me-2 ms-2  ">
            <div class="container">
                <h2>Contact Us</h2>
                <hr>
                <form action="{{ route('contact.post') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control input-lg mb-4"
                                    placeholder="Your Name">
                            </div>
                            <div class="form-group">
                                <input type="text" name="email" class="form-control input-lg mb-4"
                                    placeholder="E-mail">
                            </div>
                            <div class="form-group">
                                <input type="text" name="phone"
                                    class="form-control input-lg mb-4"placeholder="Cell Phone">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <textarea class="form-control input-lg" name="message" placeholder="Your Messege"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary m-block w-100 mt-4 mb-2">Contact US</button>
                        </div>
                    </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    <!-- end contact us  -->
    <!-- maps start  -->
    <div class="maps">
        <div class="">
            <iframe class="iframe"
                src="https://maps.google.com/maps?q={{ $settings->latitude1 ?? '' }},{{ $settings->longitude1 ?? '' }}&hl=es;z=14&amp;output=embed"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class=""><iframe class="iframe"
                src="https://maps.google.com/maps?q={{ $settings->latitude2 ?? '' }},{{ $settings->longitude2 ?? '' }}&hl=es;z=14&amp;output=embed"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe></div>
    </div>
    <!-- maps end  -->
    <!-- footer start  -->
    @include('frontend::includes.footer')
    <!-- footer end  -->

    <!-- scripts start -->
    @include('frontend::includes.scripts')
    <!-- scripts end -->
    <x:notify-messages />
    @notifyJs
</body>

</html>
