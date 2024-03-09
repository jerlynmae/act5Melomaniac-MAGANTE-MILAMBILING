<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome in Our Tune Hub, Enjoy!</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #FFE4E1; /* Light pink background color */
            margin: 0;
            padding: 20px; /* Add some padding for better readability */
        }
        h1 {
            color: #333; /* Dark gray heading color */
            text-align: center;
            margin-bottom: 30px;
        }
        .song-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }
        .song {
            background-color: #FFC0CB; /* Pink background color */
            color: #000000; /* Black text color */
            padding: 20px;
            margin: 10px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Soft shadow effect */
            transition: transform 0.3s ease;
            text-align: center;
            width: 200px;
        }
        .song:hover {
            transform: translateY(-5px); /* Lift on hover */
        }
        .song a {
            color: #000000; /* Black link color */
            text-decoration: none;
            font-weight: bold;
            font-size: 18px;
        }
        .song a:hover {
            color: #FF69B4; /* Pink link color on hover */
        }
    </style>
</head>
<body>
    <h1>WELCOME TO OUR MUSIC HUB! ENJOY! :)</h1>
    
    <div class="song-container">
        <div class="song">
            <a href="song1.php">Too Less Lonely People - KZ Tandingan</a>
        </div>
        <div class="song">
            <a href="song2.php">How deep is your love? - Bee Gees</a>
        </div>
        <div class="song">
            <a href="song3.php">You'll be safe here River Maya</a>
        </div>
        <div class="song">
            <a href="song4.php">Heaven - Bryan Adams</a>
        </div>
        <div class="song">
            <a href="song5.php">Yellow - Coldplay</a>
        </div>
    </div>
</body>
</html>
