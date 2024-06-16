
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
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        body {
            font-family: Poppins;
            background-color: #d8a5e0; /* Light purple background */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            background-color: #e2b7ec; /* Slightly darker purple */
            border-radius: 10px;
            padding: 20px;
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            column-gap: 200px;
        }

        .container div {
            background-color: #ffffff;
            border-radius: 10px;
            padding: 20px;
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .container div img {
            width: 50px;
            height: 50px;
            margin-bottom: 10px;
        }
        .search-container {
            display: flex;
            justify-content: center;
            margin-bottom: 20px;
        }

        .search-container input {
            padding: 10px;
            width: 300px;
            border: 1px solid #ccc;
            border-radius: 5px 0 0 5px;
        }

        .search-container button {
            padding: 10px;
            border: 1px solid #ccc;
            background-color: #ffffff;
            border-left: none;
            border-radius: 0 5px 5px 0;
            cursor: pointer;
        }

        .search-container button img {
            width: 20px;
            height: 20px;
        }
    </style>
</head>

<body>
<div class="container">
    <div style="cursor: pointer;" onclick="window.location.href='{{ url('/landing') }}'">
        <img src="{{ asset('imgs/info.png') }}" alt="CVSU-Tanza">
        <p>CVSU-Tanza</p>
    </div>
    <div style="cursor: pointer;" onclick="window.location.href='{{ url('/organization') }}'">
        <img src="{{ asset('imgs/orgchart.png') }}" alt="CVSU-Tanza">
        <p>Organizational Chart</p>
    </div>
    <div style="cursor: pointer;" onclick="window.location.href='{{ url('/organization') }}'">
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
    <div style="cursor: pointer;" onclick="window.location.href='{{ url('/organization') }}'">
        <img src="{{ asset('imgs/dtr.png') }}" alt="CVSU-Tanza">
        <p>DTR</p>
    </div>
    <div style="cursor: pointer;" onclick="window.location.href='{{ url('/organization') }}'">
        <img src="{{ asset('imgs/question.png') }}" alt="CVSU-Tanza">
        <p>FAQ's</p>
    </div>
</div>
</body>
