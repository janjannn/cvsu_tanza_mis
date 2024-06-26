<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faculty and Staff</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <style>
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
            width: 100%;
            font-family: Poppins;
            background-color: #C9A2ED;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
        h1 {
            margin: 20px 0;
            font-size: 2.5em;
            font-weight: 500;
            color: #333;
            text-align: center;
        }
        .top-profile {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin: 10px;
            padding: 20px;
            box-sizing: border-box;
            width: 250px;
            text-align: center;
        }
        .faculty-staff-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            width: 100%;
            max-width: 1200px;
            padding: 20px;
            box-sizing: border-box;
        }
        .profile {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin: 10px;
            padding: 20px;
            box-sizing: border-box;
            width: 250px;
            text-align: center;
        }
        .profile img, .top-profile img {
            border-radius: 50%;
            width: 100px;
            height: 100px;
            object-fit: cover;
        }
        .profile h2, .top-profile h2 {
            font-size: 1.5em;
            font-weight: 500;
            margin: 10px 0 5px;
        }
        .profile p, .top-profile p {
            margin: 5px 0;
            font-size: 1em;
            color: #555;
        }
    </style>
</head>
<body>
    <h1>Faculty and Staff</h1>
    <div class="top-profile">
        <img src="imgs/tanza.png" alt="Alice Green">
        <h2>Name</h2>
        <p>Designation</p>
    </div>
    <div class="faculty-staff-container">
        <div class="profile">
            <img src="imgs/tanza.png" alt="John Doe">
            <h2>Name</h2>
            <p>Dedignation</p>
        </div>
        <div class="profile">
            <img src="imgs/tanza.png" alt="Jane Smith">
            <h2>Name</h2>
            <p>Designation</p>
        </div>
        <div class="profile">
            <img src="imgs/tanza.png" alt="Robert Brown">
            <h2>Name</h2>
            <p>Designation</p>
        </div>
        <div class="profile">
            <img src="imgs/tanza.png" alt="Emily Johnson">
            <h2>Name</h2>
            <p>Designation</p>
        </div>

        <!-- Add more profiles as needed -->
    </div>
</body>
</html>
