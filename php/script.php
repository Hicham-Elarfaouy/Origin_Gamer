<?php
session_start();

include('database.php');

if (isset($_POST['login'])) check_login(validate_input($_POST["email"], 'email'), validate_input($_POST["pass"], 'pass'));
if (isset($_POST['signup'])) sign_up();

function check_login($email, $pass): void
{
    if($email=='null' || $pass=='null'){
        $_SESSION['message'] = "Invalid inputs !";
        header('location: ../view/login.php');
        die();
    }

    $link = connection();

    $sql = "SELECT * FROM users where email = '$email'";

    if ($result = mysqli_query($link, $sql)) {
        $row = mysqli_fetch_array($result);
        if (mysqli_num_rows($result) > 0 && password_verify($pass, $row['pass'])) {
            $_SESSION['user'] = [$row['id'], $row['first_name'], $row['last_name'], $row['email'], $row['is_admin']];
            header('location: ../view/home.php');
            die();
        }
    }

    $_SESSION['message'] = "Incorrect information, please check it !";
    header('location: ../view/login.php');
    

    // Close connection
    mysqli_close($link);
}

function sign_up(): void
{
    $first_name = validate_input($_POST["first_name"], 'text');
    $last_name = validate_input($_POST["last_name"], 'text');
    $email = validate_input($_POST["email"], 'email');
    $pass = validate_input($_POST["pass"], 'pass');

    if($first_name=='null' || $last_name=='null' || $email=='null' || $pass=='null'){
        $_SESSION['message'] = "Invalid inputs !";
        header('location: ../view/signup.php');
        die();
    }

    $link = connection();

    $sql = "SELECT * FROM users where email = '$email'";
    if ($result = mysqli_query($link, $sql)) {
        if (mysqli_num_rows($result) > 0) {
            $_SESSION['message'] = "Already exist this email, login !";
            header('location: ../view/login.php');
            die();
        }
    }

    $hash = password_hash($pass, PASSWORD_DEFAULT);

    $sql = "INSERT INTO users VALUES ('', '$first_name', '$last_name', '$email', '$hash', false)";

    if (mysqli_query($link, $sql)) {
        check_login($email, $pass);
    } else {
        $_SESSION['message'] = "Incorrect information, please check it !";
        header('location: ../view/signup.php');
    }

    // Close connection
    mysqli_close($link);
}

function validate_input($input, $type): string
{
    return match ($type) {
        "text" => preg_match("/^[a-zA-Z0-9]+$/", $input) ? $input : 'null',
        "pass" => preg_match("/^[a-zA-Z0-9$#@.%]{8,}$/", $input) ? $input : 'null',
        "email" => filter_var($input, FILTER_VALIDATE_EMAIL) ? $input : 'null',
        default => "null",
    };
}