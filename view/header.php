<?php
$page = 'index';
if (isset($_SESSION['user'])) {
    $page = 'home';
}
?>
<header class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
        <a id="logo" class="navbar-brand" href="../index.php">Origin Gamer</a>
        <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="../index.php">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                       aria-expanded="false">
                        Pc Components
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="<?=$page?>.php?cat=1">CPUs</a></li>
                        <li><a class="dropdown-item" href="<?=$page?>.php?cat=2">MotherBoards</a></li>
                        <li><a class="dropdown-item" href="<?=$page?>.php?cat=3">Memory</a></li>
                        <li><a class="dropdown-item" href="<?=$page?>.php?cat=4">Storage</a></li>
                        <li><a class="dropdown-item" href="<?=$page?>.php?cat=5">Peripherals</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                       aria-expanded="false">
                        Gaming Pcs
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="<?=$page?>.php?cat=6">Gaming Desktops</a></li>
                        <li><a class="dropdown-item" href="<?=$page?>.php?cat=7">Gaming Laptops</a></li>
                        <li><a class="dropdown-item" href="<?=$page?>.php?cat=8">PreBuild Pcs</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">Contact Us</a>
                </li>
            </ul>
            <?php
            if (isset($_SESSION['user'])) {
                $name = $_SESSION['user'][1].' '.$_SESSION['user'][2];
                echo '<div class="navbar-item navbar-user dropdown">
                        <div style="cursor: pointer" class="navbar-link dropdown-toggle d-flex align-items-center" data-bs-toggle="dropdown">
                            <span>
                                <span class="me-1">'.$name.'</span>
                                <b class="caret"></b>
                            </span>
                        </div>
                        <div class="dropdown-menu me-1 dropdown-menu-lg-end">
                            <a href="profile.php" class="dropdown-item">Edit Profile</a>
                            <div class="dropdown-divider"></div>
                            <a href="logout.php" class="dropdown-item">Log Out</a>
                        </div>
                    </div>';
            } else {
                echo '<div>
                        <a href="login.php" class="btn btn-outline-secondary btn-sm">LOGIN</a>
                        <a href="signup.php" class="btn btn-secondary btn-sm">SIGN UP</a>
                      </div>';
            }
            ?>
        </div>
    </div>
</header>
