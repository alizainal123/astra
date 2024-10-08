<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Game Login</title>
    <style>
        body {
            font-family: 'Comic Sans MS', cursive, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #37b7c3;
            background-image: radial-gradient(#ebf4f6 2px, transparent 2px), radial-gradient(#ebf4f6 2px, transparent 2px);
            background-size: 61px 61px;
            background-position: 0 0, 30.5px 30.5px;
        }

        .container {
            background-color: #71c9ce;
            border: 2px solid white;
            border-radius: 20px;
            padding: 30px;
            width: 300px;
            text-align: center;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
        }

        h1 {
            font-size: 24px;
            color: white;
            margin-bottom: 20px;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color:  #71c9ce;
            color: white;
            border: 2px solid white;
            border-radius: 10px;
            cursor: pointer;
            font-family: 'Comic Sans MS', cursive, sans-serif;
            transition: background-color 0.3s;
            margin-bottom: 10px;
        }

        button:hover {
            background-color: #004D40;
        }

        .view-ranking {
            background-color: #71c9ce;
        }

        .view-ranking:hover {
            background-color: #00796B;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Selamat Datang Di Quiz</h1>
        <button type="submit" action="biodata.php" >Start</button>
        <button class="view-ranking" action="hasil_test.php">View Ranking</button>
    </div>
</body>
</html>