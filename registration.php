<?php
session_start();
include("db_connect.php");
$login = $_POST['login'];
$password = $_POST['password'];
$md5_password = md5($password);
$query = mysqli_query($db, "SELECT * FROM `users` WHERE `login`='{$login}'");
if (mysqli_num_rows($query) == 0) {
    $_SESSION['user'] = ['nick' => $login];
    mysqli_query($db, "INSERT INTO `users` (`login`, `password`) VALUES ('{$login}', '{$md5_password}')");
    header("Location: /user.php");
} else {
    ?>
    <!DOCTYPE html>
    <html lang="ru">
    <head>
        <meta charset="UTF-8">
        <title>Ошибка авторизации</title>
        <style>
            body {
                background-color: #b6d1ae;
                color: white;
                font-family: Arial, sans-serif;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                height: 60vh;
                margin: 0;
                text-align: center;
            }

            .message {
                font-size: 36px;
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
        <div class="message">Ошибка: Логин или пароль уже существуют.</div>
        <a class="back" href="registration.html">Назад</a>
         </body>
    </html>
    <?php
}
?>
