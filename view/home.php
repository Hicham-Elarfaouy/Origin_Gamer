<?php
$title = 'Home';
include_once('head.php');
include_once('header.php');

if (!isset($_SESSION['user'])) {
    header('location: ../index.php');
}
?>
    <main>
        <?php if (isset($_SESSION['user'])): ?>
            <div class="alert alert-green alert-dismissible fade show">
                <strong>Error!</strong>
                <?php
                echo $_SESSION['user'];
                //                unset($_SESSION['user']);
                ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        <?php endif ?>
        <h1>
            Home account
        </h1>
    </main>
<?php
include_once('footer.php');
?>