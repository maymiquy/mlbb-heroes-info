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
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <!-- Scripts -->
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
        <style>
            #navbar {
              background: rgb(184,0,0);
              background: linear-gradient(90deg, rgba(184,0,0,1) 24%, rgba(2,0,158,1) 71%);
            }
    
            .navbar-dark .nav-item .nav-link {
                color: #fff;
            }
    
            .navbar-dark .nav-item .nav-link:hover {
                transition: all 0.3s ease;
                border-radius: 0.25rem;
                color: #fff;
            }
    
            .fa-li {
                position: relative;
                left: 0;
            }
    
        </style>
    </head>

    <body>
        <div id="app">
            <nav >
                @include('partials.navfro')
            </nav>

            <main class="py-4">
                @yield('content')
            </main>
        </div>
    </body>

</html>