<?php
session_start();

include('database.php');

if (isset($_POST['login'])) check_login();

function check_login(): void
{
    $email = $_POST["email"];
    $pass = $_POST["pass"];

    $link = connection();

    $sql = "SELECT * FROM users where email = '$email' AND pass = '$pass'";

    if ($result = mysqli_query($link, $sql)) {
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_array($result);
            $_SESSION['user'] = $row['id'];
            header('location: ../../view/home.php');
        } else {
            $_SESSION['message'] = "Incorrect information, please check it !";
            header('location: ../../view/login.php');
        }
    }

    // Close connection
    mysqli_close($link);
}
