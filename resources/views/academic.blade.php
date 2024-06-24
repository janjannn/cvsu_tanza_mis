<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Academic</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <style>
        body {
            font-family: Poppins, sans-serif;
            background-color: #D5A8E0;
            margin: 0;
            padding: 0;
        }
        .header {
            text-align: center;
            padding: 20px;
            background-color: #D5A8E0;
            color: #000000;
        }
        .header h1 {
            margin-top: 20px;
            font-size: 2.5rem;
            font-weight: 500;
        }
        .header h2{
            margin-top: 20px;
            font-weight: 500;
        }
        .programs {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 15px;
            padding: 0 10px;
            max-width: 1400px;
            margin: 0 auto;
        }
        .program {
            display: flex;
            align-items: center;
            background-color: white;
            border-radius: 10px;
            padding: 60px;
            width: calc(50% - 30px);
            box-sizing: border-box;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .program img {
            width: 50px;
            height: 50px;
            margin-right: 10px;
        }
        .program p {
            margin: 0;
            font-size: 1.1em;
            flex: 1;
        }
        .info-icon {
            font-size: 1.5em;
            color: #666;
            margin-left: 10px;
            cursor: pointer;
        }
        .container {
            text-align: center;
            width: 100%;
            max-width: 1000px;
            margin: 40px auto;
        }
        .container h1 {
            font-size: 2.5rem;
            font-weight: 500;
            color: black;
            margin-bottom: 40px;
            margin-top: 45px;
        }
        .department {
            background-color: #ffffff;
            padding: 20px;
            margin: 30px 0;
            border-radius: 10px;
            font-size: 1.5rem;
            font-weight: 500;
            color: black;
        }


        .containerr {
            width: 90%;
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
            background-color: #D5A8E0;
            border-radius: 15px;
        }
        .headerr {
            text-align: center;
            margin-bottom: 20px;
        }
        .headerr h1 {
            font-size: 3rem;
            font-weight: 500;
            margin: 0;
            color: #000000;
        }
        .headerr h2 {
            font-size: 1.5rem;
            font-weight: 500;
            margin: 10px;
            color: #000000;
        }
        .content {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            gap: 20px;
        }
        .calendar-section {
            flex: 1;
        }
        .calendar-table {
            background-color: #fff;
            border-collapse: collapse;
            width: 100%;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            table-layout: fixed;
        }
        .calendar-table caption {
            background-color: #333;
            color: #fff;
            padding: 10px;
            font-weight: 500;
        }
        .calendar-table th, .calendar-table td {
            padding: 5px;
            text-align: center;
            border: 1px solid #ddd;
            font-size: 0.9rem;
        }
        .calendar-table th {
            background-color: #f2f2f2;
            font-weight: 500;
        }
        .schedule {
            background-color: #fff;
            border-radius: 10px;
            padding: 10px;
            width: 65%;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .schedule ul {
            list-style: none;
            padding: 0;
        }
        .schedule li {
            margin-bottom: 10px;
            font-size: 1rem;
            color: #000000;
        }
        .schedule li span {
            float: right;
            color: rgb(70, 70, 70);
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Academics</h1>
        <h2>Academic Program</h2>
    </div>
    <div class="programs">
        <div class="program">
            <img src="imgs/hand.png" alt="Business Administration">
            <p>Bachelor of Science in Business Administration</p>
            <span class="info-icon">ℹ️</span>
        </div>
        <div class="program">
            <img src="imgs/hospitality.png" alt="Hospitality Management">
            <p>Bachelor of Science in Hospitality Management</p>
            <span class="info-icon">ℹ️</span>
        </div>
        <div class="program">
            <img src="imgs/it.png" alt="Information Technology">
            <p>Bachelor of Science in Information Technology</p>
            <span class="info-icon">ℹ️</span>
        </div>
        <div class="program">
            <img src="imgs/tour.png" alt="Tourism Management">
            <p>Bachelor of Science in Tourism Management</p>
            <span class="info-icon">ℹ️</span>
        </div>
        <div class="program">
            <img src="imgs/education.png" alt="Secondary Education">
            <p>Bachelor in Secondary Education</p>
            <span class="info-icon">ℹ️</span>
        </div>
        <div class="program">
            <img src="imgs/psychology.png" alt="Psychology">
            <p>Bachelor of Science in Psychology</p>
            <span class="info-icon">ℹ️</span>
        </div>
    </div>

    <div class="container">
        <h1>Academic Departments</h1>
        <div class="department">Psychology</div>
        <div class="department">Information Technology</div>
        <div class="department">Hospitality Management</div>
        <div class="department">Tourism Management</div>
        <div class="department">Business Management</div>
        <div class="department">Teacher Education</div>
    </div>


    <div class="containerr">
        <div class="headerr">
            <h1>Academic Calendar</h1>
            <h2>Second Semester<br>February 26, 2024 - June 29, 2024</h2>
        </div>
        <div class="content">
            <div class="calendar-section">
                <table class="calendar-table">
                    <caption>February</caption>
                    <thead>
                        <tr>
                            <th>Mon</th>
                            <th>Tue</th>
                            <th>Wed</th>
                            <th>Thu</th>
                            <th>Fri</th>
                            <th>Sat</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>1</td>
                            <td>2</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>6</td>
                            <td>7</td>
                            <td>8</td>
                            <td>9</td>
                            <td>10</td>
                        </tr>
                        <tr>
                            <td>12</td>
                            <td>13</td>
                            <td>14</td>
                            <td>15</td>
                            <td>16</td>
                            <td>17</td>
                        </tr>
                        <tr>
                            <td>19</td>
                            <td>20</td>
                            <td>21</td>
                            <td>22</td>
                            <td>23</td>
                            <td>24</td>
                        </tr>
                        <tr>
                            <td>26</td>
                            <td>27</td>
                            <td>28</td>
                            <td>29</td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
                <table class="calendar-table">
                    <caption>March</caption>
                    <thead>
                        <tr>
                            <th>Mon</th>
                            <th>Tue</th>
                            <th>Wed</th>
                            <th>Thu</th>
                            <th>Fri</th>
                            <th>Sat</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>1</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>5</td>
                            <td>6</td>
                            <td>7</td>
                            <td>8</td>
                            <td>9</td>
                        </tr>
                        <tr>
                            <td>11</td>
                            <td>12</td>
                            <td>13</td>
                            <td>14</td>
                            <td>15</td>
                            <td>16</td>
                        </tr>
                        <tr>
                            <td>18</td>
                            <td>19</td>
                            <td>20</td>
                            <td>21</td>
                            <td>22</td>
                            <td>23</td>
                        </tr>
                        <tr>
                            <td>25</td>
                            <td>26</td>
                            <td>27</td>
                            <td>28</td>
                            <td>29</td>
                            <td>30</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="schedule">
                <ul>
                    <li>Evaluation / Pre-Registration Period (New Students) <span>February 5-24, 2024</span></li>
                    <li>Registration Period <span>February 12-24, 2024</span></li>
                    <li style="margin-top: 40px; font-size: 1.2rem; font-weight: 600">Beginning of Classes <span style="font-size: 1rem; font-weight: 400;">February 26, 2024</span></li>
                    <li>Submission of Performances Commitment (PCR) (Target) <span>March 1, 2024</span></li>
                    <li>Last Day for Adding and Changing of Subjects <span>March 14, 2024</span></li>
                    <li>Last Day of Dropping of Subject(s) without evaluation <span>March 21, 2024</span></li>
                    <li>Payment of fees for paying students (1st payment) <span>March 11-21, 2024</span></li>
                    <li>College Academic Council Meeting <span>March 27, 2024</span></li>
                    <li>Last day of filing of Application for graduation (College registrar) <span>April 1, 2024</span></li>
                    <li>Submission of List of Candidates for Graduation <span>April 18, 2024</span></li>
                    <li>Payment of fees for paying students (Midterm Examination) (2nd payment) <span>April 15-18, 2024</span></li>
                    <li style="margin-top: 40px; font-size: 1.2rem; font-weight: 600">Midterm Examination <span style="font-size: 1rem; font-weight: 400;">April 22, 2024</span></li>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>
