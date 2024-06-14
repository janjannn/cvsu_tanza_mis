<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>KioskState</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/report.js') }}" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
        @keyframes textReveal {
            0% {
                opacity: 0;
                transform: translateY(20px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .reveal {
            animation: textReveal 1s ease-in-out;
        }
    </style>
</head>

<body>
    <div class="container">
        <div id="app">
            <nav class="navbar navbar-expand-md fixed-top navbar-light bg-white shadow-sm">
                <div class="container">
                    <a class="navbar-brand" href="{{ url('/kiosk') }}">
                        <img src="{{ asset('imgs/tanza.png') }}" style="width: 45px; height: 45px; margin-right: 10px;">
                        KioskState
                    </a>
                    <!--Go back button -->
                    <a class="nav-link" href="{{ route('admin.home') }}">{{ __('Go back') }}</a>
                </div>
            </nav>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="jumbotron text-center" style="margin-top: 190px;">
                            <h1 class="display-4 reveal">Cavite State University<br>Tanza Campus <br>Kiosk State<br>System</h1>
                            <a class="btn btn-success btn-lg reveal" style="margin-top: 60px;" href="{{ url('/dashboard') }}">Get Started</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
