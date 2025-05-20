<?php
session_start();
include("db_connect.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $first_name = mysqli_real_escape_string($db, $_POST['first-name']);
    $last_name = mysqli_real_escape_string($db, $_POST['last-name']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $about = mysqli_real_escape_string($db, $_POST['about']);

    $_SESSION['user'] = [
        'first_name' => $first_name,
        'last_name' => $last_name,
        'email' => $email,
        'about' => $about
    ];

    $query = "INSERT INTO `onlinezayavka` (`first_name`, `last_name`, `email`, `about`) 
              VALUES ('$first_name', '$last_name', '$email', '$about')";
    mysqli_query($db, $query);

    header('Location: index.html');
    exit();
}
?>
