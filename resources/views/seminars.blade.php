<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seminar and Training</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 80%;
            margin: auto;
            overflow: hidden;
        }
        .title {
            text-align: center;
            background-color: #773ea8;
            color: #fff;
            padding: 20px;
            font-size: 2em;
            font-weight: 500;
            margin: 20px 0;
            border-radius: 5px;
            border: 4px solid #C9A2ED;
        }
        .seminar {
            display: flex;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1), 5px 5px 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            overflow: hidden;
        }
        .seminar img {
            width: 40%;
            object-fit: cover;
        }
        .seminar-content {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            padding: 20px;
            flex: 1;
        }
        .seminar-title {
            font-weight: 500;
            font-size: 2em;
            margin: 0 0 10px 0;
        }
        .seminar-desc {
            font-size: 1.5em;
            font-weight: 300;
            color: #333;
        }
        .seminar-date {
            font-weight: 500;
            color: #888;
            margin-top: 10px;
        }
        .divider {
            height: 1px;
            background-color: #e8e8e8;
            margin: 20px 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="title">Seminar and Training</div>
        <div class="seminar">
            <div class="seminar-content">
                <div>
                    <div class="seminar-title">BUHAY VIRTUAL ASSISTANT: A seminar series on Excelling Virtual Workforce 2024</div>
                    <div class="seminar-desc">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud ."</div>
                </div>
                <div class="seminar-date">July 27, 2024</div>
            </div>
            <img src="imgs/logoto.jpg" alt="BUHAY VIRTUAL ASSISTANT">
        </div>
        <div class="divider"></div>
        <div class="seminar">
            <div class="seminar-content">
                <div>
                    <div class="seminar-title">Leadership Empowerment and Advocacy Development 2023</div>
                    <div class="seminar-desc">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis."</div>
                </div>
                <div class="seminar-date">July 27, 2024</div>
            </div>
            <img src="imgs/logoto.jpg" alt="Leadership Empowerment">
        </div>
    </div>
</body>
</html>
