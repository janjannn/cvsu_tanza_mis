<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Stakeholders' Feedback Form</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
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
    </style>
</head>
<body>
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
        <h2 class="text-center">ONLINE STAKEHOLDERS' FEEDBACK FORM</h2>
        <form action="{{ route('feedback.store') }}" method="POST">
            @csrf
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="full_name">Full Name</label>
                    <input type="text" class="form-control" id="full_name" name="full_name" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="email">Email Address</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="attending_staff">Attending Staff</label>
                    <input type="text" class="form-control" id="attending_staff" name="attending_staff" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="request">Request</label>
                    <input type="text" class="form-control" id="request" name="request" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="date_of_request">Date of Request</label>
                    <input type="date" class="form-control" id="date_of_request" name="date_of_request" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="client_office">Client's Office/Agency</label>
                    <select class="form-control" id="client_office" name="client_office" required>
                        <option value="" selected disabled>Select Client's Office/Agency</option>
                        <option value="cvsu campuses">CVSU Campuses</option>
                        <option value="student">Student</option>
                        <option value="other agencies">Other Agencies</option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="concerned_office">Concerned Office/Unit</label>
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
                <p>Rate us using the following scale: 1 - Highly satisfied, 2 - Satisfied, 3 - Moderately satisfied, 4 - Slightly satisfied, 5 - Not satisfied</p>
            </div>
            <div class="form-group">
                <label>Areas of Concern</label>
                <table class="table table-bordered">
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
                <label for="comments">Comments/Suggestions</label>
                <textarea class="form-control" id="comments" name="comments" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <br>
    <br>
    <br>
    <br>
</body>
</html>
