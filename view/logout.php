<?php
session_start();
session_destroy();
$hour = time() - 3600 * 24 * 30;
setcookie('user_id', $row['id'], $hour, '/');
setcookie('user_first', $row['first_name'], $hour, '/');
setcookie('user_last', $row['last_name'], $hour, '/');
setcookie('user_email', $row['email'], $hour, '/');
header('location: login.php');