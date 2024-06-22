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
        
        .btn-container {
            margin-top: 50vh;
            text-align: center;
            transform: translateY(-50%);
        }

        .btn-container button {
            margin: 20px;
            padding: 80px 130px;
            font-size: 24px;
            border-width: 3px;
            background-color: rgba(46, 139, 87, 0.8); /* Semi-transparent green color */
            color: white; /* Text color */
            border-color: rgba(46, 139, 87, 0.8); /* Border color */
        }

        .btn-container button:hover {
            background-color: rgba(46, 139, 87, 1); /* Fully opaque green color on hover */
            border-color: rgba(46, 139, 87, 1); /* Border color on hover */
        }

        body {
            background-image: url('{{ asset('imgs/logooo.jpg') }}'); /* Replace 'background.jpg' with your image path */
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 100vh; /* Full viewport height */
            overflow: hidden; /* Prevent scrolling */
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
                    <!-- Go back button -->
                    <a class="nav-link" href="{{ route('admin.home') }}">{{ __('Go back') }}</a>
                </div>
            </nav>
            <div class="container btn-container">
                <button id="faculty-btn" class="btn btn-success">Faculty</button>
                <button id="students-btn" class="btn btn-success">Students</button>
                <button id="visitor-btn" class="btn btn-success">Visitor</button>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('faculty-btn').addEventListener('click', function() {
            window.location.href = '{{ url("/dashboard") }}';
        });

        document.getElementById('students-btn').addEventListener('click', function() {
            window.location.href = '{{ url("/dashboard") }}';
        });

        document.getElementById('visitor-btn').addEventListener('click', function() {
            window.location.href = '{{ url("/dashboard") }}';
        });
    </script>
</body>
</html>
