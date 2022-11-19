<?php
$title = 'Home';
include_once('head.php');
include_once('header.php');

if (!isset($_SESSION['user'])) {
    header('location: ../index.php');
}
?>
    <main>
        <?php
            include_once ('components/list_products.php');
        ?>
    </main>
<?php
include_once('footer.php');
?>