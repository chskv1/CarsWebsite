<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['mail'];
    $password = $_POST['password'];
    $repassword = $_POST['repeat_password'];

    if ($password !== $repassword) {

    }
    $connection = mysqli_connect();
    if (!$connection) {
        die('Connection error' . mysqli_connect_error());
    }
    $hashPass = password_hash($password, PASSWORD_DEFAULT);
    $query = ""; //pamietaj zrobić querry
    if (mysqli_query($connection, $query)) {
        //header("Location: ")
        exit();
    } else {
        echo 'register error' . mysqli_error($connection);
    }
    mysqli_close($connection);
}
?>