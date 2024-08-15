<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" required content="width=device-width, initial-scale=1.0" />
    <title>{{ site_name() }}</title>
    <link rel="shortcut icon" href="{{ app_favicon() }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}" />
    @notifyCss

    <title>{{ Settings::get('seo_title') }}</title>
    <meta name="description" required content="{{ Settings::get('seo_desc') }}">
    <meta name="keywords" required content="{{ Settings::get('key_words') }}">
    {!! Settings::get('google_analects') !!}
    {!! Settings::get('facebook_pixel') !!}
    {!! Settings::get('google_id_head') !!}
    {!! Settings::get('google_tag_manger') !!}
    {!! Settings::get('hotjar') !!}
    {!! Settings::get('linked_tag') !!}

</head>

<body>
    <!-- start section contact  -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="top_sec mb-4">
                        <h2 class="title h-100 mb-3 mb-md-0">
                            {{ Settings::get('title') }}
                        </h2>
                        <div class="logo d-flex mb-5 mb-md-0">
                            <img src="{{ app_logo() }}" alt="" />
                        </div>
                        <p class="mb-0 pl-lg-4">
                            {{ Settings::get('description') }}
                        </p>
                    </div>
                </div>
                <!-- start left sec  -->
                <div class="col-md-6">
                    <!-- start form  -->
                    <form action="{{ route('request.post') }}" method="POST">
                        @csrf
                        <!-- start input -->
                        <div class="par_input">
                            <label for="">
                                <span class="active"></span>
                                Exhibition
                            </label>
                            <input type="text" name="exhibition" required placeholder=""
                                value="{{ Settings::get('exhibtion_name') }}" />
                        </div>
                        <!-- start input -->
                        <div class="par_input">
                            <label for="">
                                <span></span>
                                Full Name
                            </label>
                            <input type="text" name="name" required placeholder="please write Your Name" />
                        </div>
                        <!-- start input -->
                        <div class="par_input">
                            <label for="">
                                <span></span>
                                Nationality
                            </label>
                            <input type="text" name="nationality" required
                                placeholder="please write Your Nationality" />
                        </div>
                        <!-- start input -->
                        <div class="par_input">
                            <label for="">
                                <span></span>
                                Mobile Number
                            </label>
                            <div class="cont_input d-flex">
                                <input type="text" name="code" required list="phoneSelect" class="pSelect" />
                                <datalist id="phoneSelect">
                                    @foreach ($codes as $code)
                                        <option value="{{ $code['dial_code'] }}"></option>
                                    @endforeach
                                </datalist>

                                <input class="inp_phone" name="phone_number" required type="tel"
                                    placeholder="please write Your Mobile Number" />
                            </div>
                        </div>
                        <!-- start input -->
                        <div class="par_input">
                            <label for="">
                                <span></span>
                                E-Mail
                            </label>
                            <input type="email" name="email" required placeholder="please write Your E-Mail" />
                        </div>
                        <!-- start input -->
                        <div class="par_input">
                            <label for="">
                                <span></span>
                                Profession
                            </label>
                            <input type="text" name="profession" required
                                placeholder="please write Your profession" />
                        </div>
                        <!-- start input -->
                        <div class="par_input">
                            <label for="">
                                <span></span>
                                How did you hear about us ?
                            </label>
                            <input type="text" name="reason" required list="Selects" placeholder="Please Select" />
                            <datalist id="Selects">
                                @foreach ($reasons as $reason)
                                    <option value="{{ $reason->reason }}"> {{ $reason->reason }} </option>
                                @endforeach
                            </datalist>
                        </div>
                        <!-- start btn form  -->
                        <button type="submit" class="btn_form">Register</button>
                    </form>
                    <!-- End form  -->
                </div>
                <!-- End left sec  -->
                <!-- start left sec  -->
                <div class="col-md-6 d-none d-md-block">
                    <!-- start img section -->
                    <div class="img_sec h-100 w-100 position-relative">
                        <img src="{{ asset('frontend/img/Landing Page-Desigcopy.png') }}" alt="" />
                    </div>
                    <!-- End img section -->
                </div>
                <!-- End left sec  -->
            </div>
        </div>
    </section>
    <!-- End section contact  -->
    {!! Settings::get('google_id_footer') !!}

    <!-- scripts end -->
    @include('notify::components.notify')
    @notifyJs
</body>

</html>
