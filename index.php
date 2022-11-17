<?php
session_start();

if (isset($_SESSION['user'])) {
    header('location: ./view/home.php');
}
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <title>Origin Gamer</title>
        <link rel="icon" type="image/x-icon" href="assets/img/logo.png">
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Best Gaming Store" name="description">
        <meta content="Hicham" name="author">
        <!-- BEGIN CSS -->
        <link href="assets/css/vendor.min.css" rel="stylesheet">
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/css/style.css" rel="stylesheet">
        <!-- END CSS -->
        <!-- BEGIN FONTS -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Tomorrow:wght@200;300;400;500&display=swap" rel="stylesheet">
        <!-- END FONTS -->

        <script src="assets/js/jquery-3.6.1.min.js"></script>
        <script src="assets/js/parsley.min.js"></script>
    </head>
    <body>
    <header class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a id="logo" class="navbar-brand" href="index.php">Origin Gamer</a>
            <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                           aria-expanded="false">
                            Pc Components
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">CPUs</a></li>
                            <li><a class="dropdown-item" href="#">MotherBoards</a></li>
                            <li><a class="dropdown-item" href="#">Memory</a></li>
                            <li><a class="dropdown-item" href="#">Storage</a></li>
                            <li><a class="dropdown-item" href="#">Peripherals</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                           aria-expanded="false">
                            Gaming Pcs
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Gaming Desktops</a></li>
                            <li><a class="dropdown-item" href="#">Gaming Laptops</a></li>
                            <li><a class="dropdown-item" href="#">PreBuild Pcs</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Contact Us</a>
                    </li>
                </ul>
                <div>
                    <a href="view/login.php" class="btn btn-outline-secondary btn-sm">LOGIN</a>
                    <a href="view/signup.php" class="btn btn-secondary btn-sm">SIGN UP</a>
                </div>
            </div>
        </div>
    </header>

    <main>
        <h1>
            Home
        </h1>
    </main>
    <!-- BEGIN JS -->
    <script src="assets/js/vendor.min.js"></script>
    <script src="assets/js/app.min.js"></script>
    <script src="assets/js/scripts.js"></script>
    <!-- END JS -->
    </body>
</html>