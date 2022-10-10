<nav class="navbar navbar-expand-lg navbar fixed-top">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">
            @if (Settings::get('theme') == 'dark')
            <img class="img-fluid" src="{{ asset('frontend/pix/logo1.png') }}" alt="Logo" />
            @else
            <img class="img-fluid" src="{{ asset('frontend/pix/logo2.png') }}" alt="Logo" />
            @endif
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa-solid fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="nav">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }} " aria-current="page"
                        href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('services') ? 'active' : '' }} "
                        href="{{ route('services') }}">Our Work</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('about') ? 'active' : '' }} "
                        href="{{ route('about') }}">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }} "
                        href="{{ route('contact') }}">Contact Us</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
