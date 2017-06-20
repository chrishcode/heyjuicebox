<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <div class="hero">
            <div class="hero-background"></div>
            <div class="hero-overlay"></div>
            <div class="fade-overlay"></div>
            <div class="hero-content">
                <div class="hero-content-top">
                    <h5></h5>
                </div>
                <div class="hero-content-bottom">
                    <div class="logo-slogan">
                        <div class="logo">
                            <p>HEYCOLDPRESSED</p>
                        </div>
                        <h1>
                            COLD-PRESSED JUICE RECOMMENDATIONS,<br>
                            EVERY WEEK.<br>
                        </h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="body-content">
            @yield('content')
        </div>
        <div class="footer">
            <h6>© HEYJUICEBOX.COM - <a href="mailto:heyjuicebox@gmail.com">CONTACT</a></h6>
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
