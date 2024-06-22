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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #d8a5e0; /* Light purple background */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .wrapper {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 100%;
            padding: 20px;
            box-sizing: border-box;
        }

        .container {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            margin-top: 20px; /* Add some margin to avoid overlap with search bar */
            text-align: center;
        }

        .container div, .container a {
            background-color: #ffffff;
            border-radius: 10px;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            text-decoration: none; /* Remove underline from links */
            color: inherit; /* Inherit text color */
        }

        .container div img, .container a img {
            width: 50px;
            height: 50px;
            margin-bottom: 10px;
        }

        /* Responsive Design */
        @media (max-width: 1200px) {
            .container {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 768px) {
            .container {
                grid-template-columns: 1fr;
            }
        }

        .stakeholders-feedback {
            margin-top: 20px;
            cursor: pointer;
            justify-self: center;
            grid-column: 1 / -1; /* Ensure the link spans all columns */
        }
    </style>
</head>

<body>
<div class="wrapper">
    <div class="container">
        @php
            $user = request()->query('user');
        @endphp

        @if($user == 'faculty' || $user == 'student')
        <div style="cursor: pointer;" onclick="window.location.href='{{ url('/landing') }}'">
            <img src="{{ asset('imgs/info.png') }}" alt="CVSU-Tanza">
            <p>CVSU-Tanza</p>
        </div>
        <div style="cursor: pointer;" onclick="window.location.href='{{ url('/organization') }}'">
            <img src="{{ asset('imgs/orgchart.png') }}" alt="CVSU-Tanza">
            <p>Organizational Chart</p>
        </div>
        <div style="cursor: pointer;" onclick="window.location.href='{{ url('/org') }}'">
            <img src="{{ asset('imgs/org.png') }}" alt="CVSU-Tanza">
            <p>Organizations</p>
        </div>
        <div style="cursor: pointer;" onclick="window.location.href='{{ url('/organization') }}'">
            <img src="{{ asset('imgs/acad.png') }}" alt="CVSU-Tanza">
            <p>Academic</p>
        </div>
        <div style="cursor: pointer;" onclick="window.location.href='{{ url('/organization') }}'">
            <img src="{{ asset('imgs/mega.png') }}" alt="CVSU-Tanza">
            <p>News</p>
        </div>
        <div style="cursor: pointer;" onclick="window.location.href='{{ url('/organization') }}'">
            <img src="{{ asset('imgs/announce.png') }}" alt="CVSU-Tanza">
            <p>Announcement</p>
        </div>
        <div style="cursor: pointer;" onclick="window.location.href='{{ url('/organization') }}'">
            <img src="{{ asset('imgs/seminar.png') }}" alt="CVSU-Tanza">
            <p>Seminars</p>
        </div>
        <div style="cursor: pointer;" onclick="window.location.href='{{ url('/organization') }}'">
            <img src="{{ asset('imgs/training.png') }}" alt="CVSU-Tanza">
            <p>Trainings</p>
        </div>
        <div style="cursor: pointer;" onclick="window.location.href='{{ url('/organization') }}'">
            <img src="{{ asset('imgs/class.png') }}" alt="CVSU-Tanza">
            <p>Class Schedule</p>
        </div>
        @endif

        @if($user == 'faculty')
        <div style="cursor: pointer;" onclick="window.location.href='{{ url('/dtr') }}'">
            <img src="{{ asset('imgs/dtr.png') }}" alt="CVSU-Tanza">
            <p>DTR</p>
        </div>
        @endif

        @if($user == 'visitor')
        <a class="stakeholders-feedback" onclick="window.location.href='{{ url('/faqs') }}'">
            <img src="{{ asset('imgs/question.png') }}" alt="CVSU-Tanza">
            <p>Stakeholders Feedback</p>
        </a>
        @endif
    </div>
</div>
</body>
</html>
