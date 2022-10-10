<div class="footer">
    <div class="top"></div>
    <div class="l-c">
        <div class="container bot text-light">
            <h3><span>SGA</span> Advertising Army</h3>
            <h4 class="text-center">{!! $settings->address !!}</h4>
            <h4>{{ Settings::get('phone') . '-' . Settings::get('mobile') }}</h4>

            <div class="Social-f">
                <a class="text-light m-3" href="{{ Settings::get('facebook') }}"><i class="fa-brands fa-facebook"></i></a>
                <a class="text-light m-3" href="{{ Settings::get('instagram') }}"><i
                        class="fa-brands fa-instagram"></i></a>
                <a class="text-light m-3" href="{{ Settings::get('twitter') }}"><i class="fa-brands fa-twitter"></i></a>
                <a class="text-light m-3" href="{{ Settings::get('linkedin') }}"><i class="fa-brands fa-linkedin-in"></i></a>
                <a class="text-light m-3" href="{{ Settings::get('youtube') }}"><i
                        class="fa-brands fa-youtube"></i></a>
            </div>
            <div class="copyright text-center p-3 text-light">
                Copyright &copy; 2022 <span>SGA</span>
            </div>
        </div>
    </div>
</div>
