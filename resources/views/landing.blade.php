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
        .margin-top-fix {
            margin-top: 80px; /* Adjust the value as needed */
        }
        .card-title {
            font-family: 'Nunito', sans-serif;
            font-size: 1.5rem;
            font-weight: bold;
        }
        .card-body {
            color: black;
        }
        .card {
            margin-bottom: 30px;
        }
        .img-fluid {
            max-width: 500px; /* Adjust as needed */
            height: auto;
            margin-bottom: 10px;
        }
        .card-equal-height .card-body {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }
    </style>
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md fixed-top navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/kiosk') }}">
                    <img src="{{ asset('imgs/tanza.png') }}" style="width: 45px; height: 45px; margin-right: 10px;">
                    KioskState
                </a>
                <!--Go back button -->
                <a class="nav-link" href="{{ url('/kiosk') }}">Go back</a>
            </div>
        </nav>
    </div>

    <div class="container margin-top-fix">
        <div class="row justify-content-center d-flex">
            <div class="col-md-4 d-flex">
                <div class="card text-center flex-fill card-equal-height" style="background-color: #D3A0E5;">
                    <div class="card-body">
                        <h4 class="card-title">History</h4>
                        <p class="card-text">The Cavite State University (CvSU) has its humble beginnings in 1906 as the Indang Intermediate School with the American Thomasians as the first teachers. Several transformations in the name of the school took place; Indang Farm School in 1918, Indang Rural High School in 1927, and Don Severino National Agricultural School in 1958. In 1964, the school was converted into a State College by virtue of Republic Act 3917 and became known as Don Severino Agricultural College (DSAC).</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex">
                <div class="card text-center flex-fill card-equal-height" style="background-color: #C4A7E7;">
                    <div class="card-body">
                        <h4 class="card-title">Faculty And Staff</h4>
                        <div class="row">
                            <div class="col-6">
                                <img src="path/to/image.jpg" alt="Faculty Image" class="img-fluid rounded-circle">
                                <p class="card-text">Name<br>Designation</p>
                            </div>
                            <div class="col-6">
                                <img src="path/to/image.jpg" alt="Faculty Image" class="img-fluid rounded-circle">
                                <p class="card-text">Name<br>Designation</p>
                            </div>
                            <!-- Repeat the above div for each faculty member -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex">
                <div class="card text-center flex-fill card-equal-height" style="background-color: #D3A0E5;">
                    <div class="card-body">
                        <h4 class="card-title">Vicinity Map</h4>
                        <img src="{{ asset('imgs/svm.jpg') }}" alt="Vicinity Map" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="jumbotron text-center" style="margin-top: 50px;">
                        <a class="btn btn-success btn-lg" style="margin-top: 60px;" href="{{ url('/dashboard') }}">Dashboard</a>
                    </div>
                </div>
            </div>
    </div>
</body>
</html>
