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
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f8f9fa;
        }
        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            align-items: stretch;
            width: 100%;
            height: 100%;
            padding: 10px;
            gap: 10px;
        }
        .card {
            flex: 1 1 calc(33.33% - 20px);
            max-width: calc(33.33% - 20px);
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            display: flex;
            flex-direction: column;
            justify-content: center;
            text-align: center;
        }
        .card-title {
            font-size: 1.8rem;
            font-weight: bold;
            margin-top: 20px;
        }
        .card-body {
            flex-grow: 1;
            padding: 20px;
            color: black;
            overflow-y: auto; /* Add scroll if content overflows */
        }
        .img-fluid {
            max-width: 100%;
            height: auto;
            margin-bottom: 10px;
        }
        .rounded-circle {
            border-radius: 50%;
        }
        @media (max-width: 768px) {
            .card {
                flex: 1 1 calc(100% - 20px);
                max-width: calc(100% - 20px);
            }
        }
    </style>
</head>

<body>
    
    <div class="container">
        <div class="card" style="background-color: #D3A0E5;">
            <div class="card-body">
                <h class="card-title" onclick="window.location.href='{{ url('/history') }}'" style="cursor: pointer;">History</h4>
                <p class="card-text" style="font-size: 1.4rem;">The Cavite State University (CvSU) has its humble beginnings in 1906 as the Indang Intermediate School with the American Thomasians as the first teachers. Several transformations in the name of the school took place; Indang Farm School in 1918, Indang Rural High School in 1927, and Don Severino National Agricultural School in 1958. In 1964, the school was converted into a State College by virtue of Republic Act 3917 and became known as Don Severino Agricultural College (DSAC).</p>
            </div>
        </div>
        <div class="card" style="background-color: #C4A7E7;">
            <div class="card-body" onclick="window.location.href='{{ url('/facultymembers') }}'" style="cursor: pointer;">
                <h4 class="card-title">Faculty And Staff</h4>
                <div class="row">
                    <div class="col-4">
                        <img src="{{ asset('imgs/tanza.png') }}" alt="Faculty Image" class="img-fluid rounded-circle">
                        <p class="card-text">Name<br>Designation</p>
                    </div>
                    <div class="col-4">
                        <img src="{{ asset('imgs/tanza.png') }}" alt="Faculty Image" class="img-fluid rounded-circle">
                        <p class="card-text">Name<br>Designation</p>
                    </div>
                    <div class="col-4">
                        <img src="{{ asset('imgs/tanza.png') }}" alt="Faculty Image" class="img-fluid rounded-circle">
                        <p class="card-text">Name<br>Designation</p>
                    </div>
                    <!-- Repeat the above div for each faculty member -->
                </div>
            </div>
        </div>
        <div class="card" style="background-color: #D3A0E5;">
            <div class="card-body" onclick="window.location.href='{{ url('/map') }}'" style="cursor: pointer;">
                <h4 class="card-title">Vicinity Map</h4>
                <img src="{{ asset('imgs/svm.jpg') }}" alt="Vicinity Map" class="img-fluid">
            </div>
        </div>
    </div>
    
</body>
</html>
