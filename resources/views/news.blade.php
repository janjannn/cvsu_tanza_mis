<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News Update</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <style>
        body {
            font-family: Poppins, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 80%;
            margin: auto;
            overflow: hidden;
        }
        h1 {
            text-align: left;
            margin-top: 20px;
            font-size: 2.5em;
            font-weight: 500;
            margin-top: 35px;
            position: relative;
            padding-bottom: 10px;
        }
        h1::after {
            content: '';
            display: block;
            width: 100%;
            height: 1px;
            background: #888;
            position: absolute;
            left: 0;
            bottom: 0;
        }
        .news-update {
            text-align: center;
            margin-top: 20px;
        }
        .news-items {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }
        .news-item {
            background-color: #fff;
            border: 2px solid #e8e8e8;
            border-radius: 5px;
            width: 30%;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            text-align: center;
            padding: 10px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            border-color: #C9A2ED;
        }
        .news-item img {
            max-width: 100%;
            border-radius: 3px 3px 0 0;
        }
        .news-item h3 {
            color: #888;
            text-align: left;
            font-size: 1em;
            font-weight: 500;
            margin-bottom: 0;
        }
        .news-item p {
            color: #000000;
            text-align: left;
            font-weight: 500;
            flex-grow: 1;
        }
        .read-more {
            background-color: #B563FD;
            color: #fff;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 3px;
            display: inline-block;
            align-self: flex-end;
            margin-right: 1px;
            box-shadow: 0 10px 6px -6px rgba(61, 61, 61, 0.9);
        }
        .read-more:hover {
            background-color: #C9A2ED;
            color: #303030;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="news-update">
            <h1>News Update</h1>
            <div class="news-items">
                <div class="news-item">
                    <img src="imgs/logoto.jpg" alt="Foundation Day">
                    <h3>July 27, 2024</h3>
                    <p>17th Founding Anniversary of CVSU-Tanza 2024</p>
                    <a href="#" class="read-more">Read More</a>
                </div>
                <div class="news-item">
                    <img src="imgs/logoto.jpg" alt="Earthquake Drill">
                    <h3>July 27, 2024</h3>
                    <p>1st Quarter Nationwide Simultaneous Earthquake Drill</p>
                    <a href="#" class="read-more">Read More</a>
                </div>
                <div class="news-item">
                    <img src="imgs/logoto.jpg" alt="Culture and Arts Festival">
                    <h3>July 27, 2024</h3>
                    <p>Culture and Arts Festival, Screening for Pop Solo, Vocal Duet and Vocal Solo</p>
                    <a href="#" class="read-more">Read More</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
