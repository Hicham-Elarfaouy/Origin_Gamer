<?php
session_start();

if (isset($_SESSION['user'])) {
    header('location: ./view/home.php');
}else{
    header('location: ./view/index.php');
}