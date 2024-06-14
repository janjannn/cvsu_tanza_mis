
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
        body {
            font-family: Arial, sans-serif;
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
    <div>
        <img src="https://via.placeholder.com/50" alt="CVSU-Tanza">
        <p>CVSU-Tanza</p>
    </div>
    <div>
        <img src="https://via.placeholder.com/50" alt="Organizational Chart">
        <p>Organizational Chart</p>
    </div>
    <div>
        <img src="https://via.placeholder.com/50" alt="Organizations">
        <p>Organizations</p>
    </div>
    <div>
        <img src="https://via.placeholder.com/50" alt="Academic">
        <p>Academic</p>
    </div>
    <div>
        <img src="https://via.placeholder.com/50" alt="News">
        <p>News</p>
    </div>
    <div>
        <img src="https://via.placeholder.com/50" alt="Announcements">
        <p>Announcements</p>
    </div>
    <div>
        <img src="https://via.placeholder.com/50" alt="Seminars">
        <p>Seminars</p>
    </div>
    <div>
        <img src="https://via.placeholder.com/50" alt="Trainings">
        <p>Trainings</p>
    </div>
    <div>
        <img src="https://via.placeholder.com/50" alt="Class Schedule">
        <p>Class Schedule</p>
    </div>
    <div>
        <img src="https://via.placeholder.com/50" alt="DTR">
        <p>DTR</p>
    </div>
    <div>
        <img src="https://via.placeholder.com/50" alt="FAQs">
        <p>FAQs</p>
    </div>
</div>
</body>
