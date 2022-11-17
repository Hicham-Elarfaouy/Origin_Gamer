<?php
$title = 'Origin Gamer';
include_once('pages/head.php');
if (isset($_SESSION['user'])) {
    header('location: home.php');
}
include_once('pages/header.php');
?>
    <main>
        <h1>
            Home
        </h1>
    </main>
<?php
include_once('pages/footer.php');
?>