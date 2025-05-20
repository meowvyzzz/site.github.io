<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Статус авторизации</title>
    <style>
        body {
            background-color: #b6d1ae;
            color: white;
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            text-align: center;
        }

        .message {
            font-size: 50px; 
            font-weight: bold;
            margin-bottom: 20px;
        }

        .back {
            display: inline-block;
            font-size: 18px;
            color: #ffffff;
            background-color: #4CAF50;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
            transition: background-color 0.3s;
        }

        .back:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="message">
        <?php
        if (isset($_SESSION['user'])) {
            echo 'Вы вошли как ' . htmlspecialchars($_SESSION['user']['nick']);
        } else {
            echo 'Вы не авторизованы.';
        }
        ?>
    </div>
    <a class="back" href="index.html">Назад</a>
</body>
</html>
