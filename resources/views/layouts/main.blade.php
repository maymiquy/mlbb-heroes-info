<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

        <title>{{ config('app.name', 'Laravel') }}</title>
        <meta content="" name="description">
        <meta content="" name="keywords">
      
        <!-- Favicons -->
        <link href="{{ asset('/assets/img/favicon.png') }}" rel="icon">
        <link href="{{ asset('/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">
      
        <!-- Google Fonts -->
        <link href="https://fonts.gstatic.com" rel="preconnect">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
      
        <!-- Vendor CSS Files -->
        <link href="{{ asset('assets/admin/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('/assets/admin/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
        <link href="{{ asset('/assets/admin/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
        <link href="{{ asset('/assets/admin/assets/vendor/quill/quill.snow.css') }}" rel="stylesheet">
        <link href="{{ asset('/assets/admin/assets/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
        <link href="{{ asset('/assets/admin/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
        <link href="{{ asset('/assets/admin/assets/vendor/simple-datatables/style.css') }}" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
      
        <!-- Template Main CSS File -->
        <link href="{{ asset('/assets/admin/assets/css/style.css') }}" rel="stylesheet">
      
    </head>

    <body class="sb-nav-fixed">
        @include('partials.navbar')

        <div id="layoutSidenav">
            @include('partials.sidebar')

            <div id="layoutSidenav_content">
                <main id="main" class="main">
                    <div class="container-fluid px-4">
                        @yield('content')
                    </div>
                </main>

                @include('partials.footer')
            </div>
        </div>
        
        <script src="{{ asset('/assets/admin/assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
        <script src="{{ asset('/assets/admin/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('/assets/admin/assets/vendor/chart.js/chart.umd.js') }}"></script>
        <script src="{{ asset('/assets/admin/assets/vendor/echarts/echarts.min.js') }}"></script>
        <script src="{{ asset('/assets/admin/assets/vendor/quill/quill.min.js') }}"></script>
        <script src="{{ asset('/assets/admin/assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
        <script src="{{ asset('/assets/admin/assets/vendor/tinymce/tinymce.min.js') }}"></script>
        <script src="{{ asset('/assets/admin/assets/vendor/php-email-form/validate.js') }}"></script>

        <!-- Template Main JS File -->
        <script src="{{ asset('/assets/admin/assets/js/main.js') }}"></script>

         <script src="{{ asset('/js/datatables-simple-demo.js') }}"></script>
    </body>

</html>