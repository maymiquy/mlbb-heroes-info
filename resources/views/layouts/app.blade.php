<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

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
    <link href="{{ asset('/assets/admin/assets/vendor/simple-datatables/style.css') }}" rel="stylesheet">
    <link href="{{ asset('/assets/UI/style.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
</head>

<body>
    <div id="app">
        @include('partials.navbarUI')
        @include('partials.heroUI')

        <main class="py-4 shadow-container">
            @yield('content')
        </main>
        @include('partials.footerUI')
    </div>

    <script src="{{ asset('/assets/admin/assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('/assets/admin/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('/assets/admin/assets/vendor/chart.js/chart.umd.js') }}"></script>
    <script src="{{ asset('/assets/admin/assets/vendor/echarts/echarts.min.js') }}"></script>
    <script src="{{ asset('/assets/admin/assets/vendor/quill/quill.min.js') }}"></script>
    <script src="{{ asset('/assets/admin/assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
    <script src="{{ asset('/assets/admin/assets/vendor/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('/assets/admin/assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('/assets/admin/assets/js/main.js') }}"></script>
    <script src="{{ asset('/assets/UI/scripts.js') }}"></script>
    <script src="{{ asset('/js/datatables-simple-demo.js') }}"></script>
</body>

</html>
