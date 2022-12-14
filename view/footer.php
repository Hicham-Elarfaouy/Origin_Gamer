<?php
$page = 'index';
if (isset($_SESSION['user'])) {
    $page = 'home';
}
?>
<footer class="bg-secondary container-fluid mt-5">
    <div class="row p-5">
        <div class="col-md-3 col-sm-6 text-white pb-5">
            <h5>
                <a class="nav-link mb-3" href="../index.php">Origin Gamer</a>
            </h5>
            <p>
                <a class="nav-link" href="../index.php">Home</a>
            </p>
            <p>
                <a class="nav-link" href="../index.php">Pc Components</a>
            </p>
            <p>
                <a class="nav-link" href="../index.php">Gaming Pcs</a>
            </p>
            <p>
                <a class="nav-link" href="../index.php">Contact Us</a>
            </p>
        </div>
        <div class="col-md-3 col-sm-6 text-white pb-5">
            <h5>
                <a class="nav-link mb-3" href="../index.php">Pc Components</a>
            </h5>
            <p>
                <a class="nav-link" href="<?=$page?>.php?cat=1">CPUs</a>
            </p>
            <p>
                <a class="nav-link" href="<?=$page?>.php?cat=2">MotherBoards</a>
            </p>
            <p>
                <a class="nav-link" href="<?=$page?>.php?cat=3">Memory</a>
            </p>
            <p>
                <a class="nav-link" href="<?=$page?>.php?cat=4">Storage</a>
            </p>
            <p>
                <a class="nav-link" href="<?=$page?>.php?cat=5">Peripherals</a>
            </p>
        </div>
        <div class="col-md-3 col-sm-6 text-white pb-5">
            <h5>
                <a class="nav-link mb-3" href="../index.php">Gaming Pcs</a>
            </h5>
            <p>
                <a class="nav-link" href="<?=$page?>.php?cat=6">Gaming Desktops</a>
            </p>
            <p>
                <a class="nav-link" href="<?=$page?>.php?cat=7">Gaming Laptops</a>
            </p>
            <p>
                <a class="nav-link" href="<?=$page?>.php?cat=8">PreBuild Pcs</a>
            </p>
        </div>
        <div class="col-md-3 col-sm-6 text-white pb-5">
            <h5>
                <a class="nav-link mb-3" href="../index.php">Get in touch</a>
            </h5>
            <p>
                <a class="nav-link" target="blank" href="https://linkedin.com/in/Hicham-Elarfaouy/"><img class="me-2" src="../assets/img/linkedin.png" style="width: 30px">Linkedin</a>
            </p>
            <p>
                <a class="nav-link" target="blank" href="https://github.com/Hicham-Elarfaouy"><img class="me-2" src="../assets/img/github.png" style="width: 30px">Github</a>
            </p>
            <p>
                <a class="nav-link" href="../index.php"><img class="me-2" src="../assets/img/twitter.png" style="width: 30px">Twitter</a>
            </p>
            <p>
                <a class="nav-link" href="../index.php"><img class="me-2" src="../assets/img/facebook.png" style="width: 30px">Facebook</a>
            </p>
        </div>
    </div>
</footer>
<!-- BEGIN JS -->
<script src="../assets/js/vendor.min.js"></script>
<script src="../assets/js/app.min.js"></script>
<script src="../assets/js/scripts.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!-- END JS -->
</body>
</html>