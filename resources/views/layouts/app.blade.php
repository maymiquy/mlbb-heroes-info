<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'MLBB Heroes') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <link href="{{ asset('assets/admin/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/assets/admin/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('/assets/admin/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/assets/admin/assets/vendor/quill/quill.snow.css') }}" rel="stylesheet">
    <link href="{{ asset('/assets/admin/assets/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
    <link href="{{ asset('/assets/admin/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('/assets/UI/style.css') }}" rel="stylesheet">
    <link href="{{ asset('/assets/UI/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">
        @include('partials.navbarUI')

        <main class="main-content shadow-container">
            @yield('content')
        </main>

        @include('partials.footerUI')
    </div>

    <script src="{{ asset('/assets/admin/assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('/assets/admin/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('/assets/admin/assets/vendor/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('/assets/admin/assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('/assets/admin/assets/js/main.js') }}"></script>
    <script src="{{ asset('/assets/UI/scripts.js') }}"></script>
    <script src="{{ asset('/assets/UI/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('/js/app.js') }}"></script>

    <script>
        var swiper = new Swiper(".hSwiper1", {
            effect: 'coverflow',
            slidesPerView: 2,
            spaceBetween: 5,
            loop: true,
            centeredSlides: true,
            coverflowEffect: {
                rotate: 0,
                stretch: 0,
                depth: 400,
                modifier: 1.5,
                slideShadows: false,
            },
            navigation: {
                nextEl: ".homeB .swiper-button-next",
                prevEl: ".homeB .swiper-button-prev",
            },
            autoplay: {
                delay: 3000,
            },
        });
    </script>
</body>

</html>
