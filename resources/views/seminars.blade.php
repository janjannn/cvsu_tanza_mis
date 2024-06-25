<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seminars and Trainings</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <style>
        body {
            font-family: Poppins, sans-serif;
            background-color: #D5A8E0;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .container {
            text-align: center;
            margin: 20px;
        }
        h1 {
            font-size: 2.2em;
            font-weight: 500;
            margin-bottom: 45px;
        }
        .image-gallery {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 150px;
        }
        .image-item {
            text-align: center;
            flex: 1 1 300px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .image-item img {
            width: 430px;
            height: 430px;
            object-fit: cover;
            border-radius: 10px;
            box-shadow: -10px 10px 20px rgba(61, 61, 61, 0.9);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .image-item:hover img {
            transform: scale(1.05);
            box-shadow: -15px 15px 30px rgba(61, 61, 61, 0.9);
        }
        .image-item p {
            margin-top: 10px;
            font-size: 1.4em;
            font-weight: 500;
            color: #000000;
            max-width: 430px;
            margin-left: auto;
            margin-right: auto;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Seminars and Trainings</h1>
        <div class="image-gallery">
            <div class="image-item">
                <img src="imgs/logoto.jpg" alt="Image 1">
                <p>BUHAY VIRTUAL ASSISTANT:A seminar series on Excelling Virtual Workforce 2024</p>
            </div>
            <div class="image-item">
                <img src="imgs/logoto.jpg" alt="Image 2">
                <p>Leadership Empowerment and Advocacy Development 2023</p>
            </div>
        </div>
    </div>
</body>
</html>
