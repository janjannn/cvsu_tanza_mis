<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Stakeholders' Feedback Form</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" rel="stylesheet">
    <style>
        .header {
            text-align: center;
            margin-bottom: 20px;
        }
        .header img {
            max-width: 100px;
        }
        .header h4, .header p {
            margin: 0;
        }
        body {
            background-color: #d8a5e0;
        }
        .card {
            margin-top: 20px;
            margin-bottom: 20px;
        }
        .form-control {
            background-color: #d6b5db;
            border-color: #000000;
        }
        .form-control:focus {
            background-color: #d6b5db;
            border-color: #000000;
            box-shadow: 0 0 0 0.2rem rgba(199, 156, 207, 0.25);
        }
        .table-black {
            color: black;
            border-collapse: collapse;
        }
        .table-black th,
        .table-black td {
            border: 1px solid black;
        }
        .table-black tr,
        .table-black thead th {
            border: 1px solid black;
        }
        input[type="radio"] {
            -webkit-appearance: none;
            appearance: none;
            background-color: #d6b5db;
            border: 1px solid black;
            padding: 6px;
            border-radius: 50%;
            display: inline-block;
            position: relative;
            outline: none;
        }
        input[type="radio"]:checked {
            background-color: #4e2d4e;
        }
        input[type="radio"]::after {
            content: "";
            display: block;
            border-radius: 50%;
            width: 5px;
            height: 5px;
            margin: 4px;
            box-shadow: inset 20px 20px #d6b5db;
        }
        input[type="radio"]:checked::after {
            background-color: #4e2d4e;
            box-shadow: inset 20px 20px #4e2d4e;
        }
    </style>
</head>
<body>
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card" style="background-color: rgba(223, 205, 235, 0.322);">
                <div class="container mt-5">
                    <div class="header">
                        <img src="{{ asset('imgs/tanza.png') }}" alt="CVSU-Tanza">
                        <h4>Republic of the Philippines</h4>
                        <h4><strong>CAVITE STATE UNIVERSITY</strong></h4>
                        <h5>Tanza Campus</h5>
                        <p>Bagtas, Tanza, Cavite</p>
                        <p>📞 (046) 414-3979</p>
                        <p><a href="http://www.cvsu.edu.ph" target="_blank">www.cvsu.edu.ph</a></p>
                    </div>
                    <h2 class="text-center">ONLINE STAKEHOLDER'S FEEDBACK FORM</h2>
                    <form action="{{ route('feedback.store') }}" method="POST">
                        @csrf
                        @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="full_name" class="font-weight-bold">Full Name</label>
                                <input type="text" class="form-control" id="full_name" name="full_name" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="email" class="font-weight-bold">Email Address</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="attending_staff" class="font-weight-bold">Attending Staff</label>
                                <input type="text" class="form-control" id="attending_staff" name="attending_staff" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="date_of_request" class="font-weight-bold">Date of Request</label>
                                <input type="date" class="form-control" id="date_of_request" name="date_of_request" required>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="client_office" class="font-weight-bold">Client's Office/Agency</label>
                                <select class="form-control" id="client_office" name="client_office" required>
                                    <option value="" selected disabled>Select Client's Office/Agency</option>
                                    <option value="cvsu campuses">CVSU Campuses</option>
                                    <option value="student">Student</option>
                                    <option value="other agencies">Other Agencies</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="concerned_office" class="font-weight-bold">Concerned Office/Unit</label>
                                <select class="form-control" id="concerned_office" name="concerned_office" required>
                                    <option value="" selected disabled>Select Concerned Office/Unit</option>
                                    <option value="Office of the Campus Administrator">Office of the Campus Administrator</option>
                                    <option value="Office of the Campus Registrar">Office of the Campus Registrar</option>
                                    <option value="Office of the Student Affairs">Office of the Student Affairs</option>
                                    <option value="Office of the Human Resources Department">Office of the Human Resources Department</option>
                                    <option value="Research Office">Research Office</option>
                                    <option value="Extension Office">Extension Office</option>
                                    <option value="Teacher Education Department">Teacher Education Department</option>
                                    <option value="Department of Arts and Sciences">Department of Arts and Sciences</option>
                                    <option value="Department of Management">Department of Management</option>
                                    <option value="Department of Information Technology">Department of Information Technology</option>
                                    <option value="Library Services">Library Services</option>
                                </select>
                            </div>
                        </div>
            <div class="form-group">
                <h5 class="font-weight-bold">Rate us using the following scale:</h5>
                <ol>
                    <li>Highly satisfied</li>
                    <li>Satisfied</li>
                    <li>Moderately satisfied</li>
                    <li>Slightly satisfied</li>
                    <li>Not satisfied</li>
                </ol>
            </div>
            <div class="form-group">
                {{-- <label class="font-weight-bold">Areas of Concern</label> --}}
                <table class="table table-bordered table-black" >
                    <thead>
                        <tr>
                            <th>Areas of Concern</th>
                            <th>1</th>
                            <th>2</th>
                            <th>3</th>
                            <th>4</th>
                            <th>5</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Courtesy of attending staff</td>
                            <td><input type="radio" name="courtesy" value="1" required></td>
                            <td><input type="radio" name="courtesy" value="2"></td>
                            <td><input type="radio" name="courtesy" value="3"></td>
                            <td><input type="radio" name="courtesy" value="4"></td>
                            <td><input type="radio" name="courtesy" value="5"></td>
                        </tr>
                        <tr>
                            <td>Quality of requested service/document</td>
                            <td><input type="radio" name="quality" value="1" required></td>
                            <td><input type="radio" name="quality" value="2"></td>
                            <td><input type="radio" name="quality" value="3"></td>
                            <td><input type="radio" name="quality" value="4"></td>
                            <td><input type="radio" name="quality" value="5"></td>
                        </tr>
                        <tr>
                            <td>Timeliness</td>
                            <td><input type="radio" name="timeliness" value="1" required></td>
                            <td><input type="radio" name="timeliness" value="2"></td>
                            <td><input type="radio" name="timeliness" value="3"></td>
                            <td><input type="radio" name="timeliness" value="4"></td>
                            <td><input type="radio" name="timeliness" value="5"></td>
                        </tr>
                        <tr>
                            <td>Efficiency</td>
                            <td><input type="radio" name="efficiency" value="1" required></td>
                            <td><input type="radio" name="efficiency" value="2"></td>
                            <td><input type="radio" name="efficiency" value="3"></td>
                            <td><input type="radio" name="efficiency" value="4"></td>
                            <td><input type="radio" name="efficiency" value="5"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="form-group">
                <label for="comments" class="font-weight-bold">Comments/Suggestions</label>
                <textarea class="form-control" id="comments" name="comments" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <br>
            <br>
            <br>
        </form>
    </div>
    </div>
        </div>
            </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#date_of_request').datepicker({
                format: 'yyyy-mm-dd',
                autoclose: true
            });
        });
    </script>
</body>
</html>
