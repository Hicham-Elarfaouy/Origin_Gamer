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
    <div id="myCarousel" class="carousel slide mx-4 my-5" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true"
                    aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner rounded">
            <div class="carousel-item active" data-bs-interval="5000">
                <img src="assets/img/slide-img-1.png" class="d-block w-100"
                     alt="Sunset Over the City"/>
            </div>

            <div class="carousel-item" data-bs-interval="5000">
                <img src="assets/img/slide-img-2.png" class="d-block w-100"
                     alt="Canyon at Nigh"/>
            </div>

            <div class="carousel-item" data-bs-interval="5000">
                <img src="assets/img/slide-img-4.jpeg" class="d-block w-100"
                     alt="Cliff Above a Stormy Sea"/>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="row mx-2 my-5">
        <div class=" d-none d-md-block col-lg-3 col-md-3">
            <div class="card">
                <div class="card-header bg-secondary text-white">
                    All Categories
                </div>
                <ul class="list-group list-group-flush">
                    <a href="#" class="list-group-item">CPUs</a>
                    <a href="#" class="list-group-item">MotherBoards</a>
                    <a href="#" class="list-group-item">Memory</a>
                    <a href="#" class="list-group-item">Storage</a>
                    <a href="#" class="list-group-item">Peripherals</a>
                </ul>
            </div>
        </div>
        <div class="col-lg-9 col-md-9">
            <div class="d-flex justify-content-between">
                <form>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search..." />
                        <button type="submit" class="input-group-text"><i class="fa fa-search"></i></button>
                    </div>
                </form>
                <div class="d-flex align-items-center ms-1">
                    <p class="m-0 me-3 d-none d-md-block">Sort By : </p>
                    <select class="form-select w-auto">
                        <option value="1" selected>Popular</option>
                        <option value="2">Price : Low to High</option>
                        <option value="3">Price : High to Low</option>
                    </select>
                </div>
            </div>
            <div class="row g-3 mt-1 justify-content-center justify-content-md-start">
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                    <div class="card">
                        <img src="assets/img/Origin%20gamer%20pictures/gigabyte-b450m-s2h-cartes-meres.jpg" class="card-img-top p-4" alt="..." >
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                    <div class="card">
                        <img src="assets/img/Origin%20gamer%20pictures/skillchairs-adventure-series-siege.jpg" class="card-img-top p-4" alt="..." >
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                    <div class="card">
                        <img src="assets/img/Origin%20gamer%20pictures/intel-core-i5-12400f-25-ghz-44-ghz-processeurs.jpg" class="card-img-top p-4" alt="..." >
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                    <div class="card">
                        <img src="assets/img/Origin%20gamer%20pictures/logitech-g933-artemis-spectrum-rgb-wireless-71-surround-gaming-headset-blanc-casques.jpg" class="card-img-top p-4" alt="..." >
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                    <div class="card">
                        <img src="assets/img/Origin%20gamer%20pictures/samsung-ssd-980-pro-m2-pcie-nvme-1tb-disques-ssd.jpg" class="card-img-top p-4" alt="..." >
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<footer class="bg-secondary container-fluid">
    <div class="row p-5">
        <div class="col-md-3 col-sm-6 text-white">
            <h5>
                <a class="nav-link mb-3" href="index.php">Origin Gamer</a>
            </h5>
            <p>
                <a class="nav-link" href="index.php">Home</a>
            </p>
            <p>
                <a class="nav-link" href="index.php">Pc Components</a>
            </p>
            <p>
                <a class="nav-link" href="index.php">Gaming Pcs</a>
            </p>
            <p>
                <a class="nav-link" href="index.php">Contact Us</a>
            </p>
        </div>
        <div class="col-md-3 col-sm-6 text-white">
            <h5>
                <a class="nav-link mb-3" href="index.php">Pc Components</a>
            </h5>
            <p>
                <a class="nav-link" href="index.php">CPUs</a>
            </p>
            <p>
                <a class="nav-link" href="index.php">MotherBoards</a>
            </p>
            <p>
                <a class="nav-link" href="index.php">Memory</a>
            </p>
            <p>
                <a class="nav-link" href="index.php">Storage</a>
            </p>
            <p>
                <a class="nav-link" href="index.php">Peripherals</a>
            </p>
        </div>
        <div class="col-md-3 col-sm-6 text-white">
            <h5>
                <a class="nav-link mb-3" href="index.php">Gaming Pcs</a>
            </h5>
            <p>
                <a class="nav-link" href="index.php">Gaming Desktops</a>
            </p>
            <p>
                <a class="nav-link" href="index.php">Gaming Laptops</a>
            </p>
            <p>
                <a class="nav-link" href="index.php">PreBuild Pcs</a>
            </p>
        </div>
        <div class="col-md-3 col-sm-6 text-white">
            <h5>
                <a class="nav-link mb-3" href="index.php">Get in touch</a>
            </h5>
            <p>
                <a class="nav-link" href="index.php"><img class="me-2" src="assets/img/linkedin.png" style="width: 30px">Linkedin</a>
            </p>
            <p>
                <a class="nav-link" href="index.php"><img class="me-2" src="assets/img/github.png" style="width: 30px">Github</a>
            </p>
            <p>
                <a class="nav-link" href="index.php"><img class="me-2" src="assets/img/twitter.png" style="width: 30px">Twitter</a>
            </p>
            <p>
                <a class="nav-link" href="index.php"><img class="me-2" src="assets/img/facebook.png" style="width: 30px">Facebook</a>
            </p>
        </div>
    </div>
</footer>
<!-- BEGIN JS -->
<script src="assets/js/vendor.min.js"></script>
<script src="assets/js/app.min.js"></script>
<script src="assets/js/scripts.js"></script>
<!-- END JS -->
</body>
</html>