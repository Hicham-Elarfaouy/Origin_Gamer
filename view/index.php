<?php
$title = 'Origin Gamer';
include_once('head.php');
if (isset($_SESSION['user'])) {
    header('location: home.php');
}
include_once('header.php');
?>
    <main>
        <?php
        include_once ('components/carousel.php');
        ?>
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
                        <p class="m-0 me-3 d-none d-lg-block">Sort By : </p>
                        <select class="form-select w-auto">
                            <option value="1" selected>Popular</option>
                            <option value="2">Price : Low to High</option>
                            <option value="3">Price : High to Low</option>
                        </select>
                        <?php
                        if(isset($_SESSION['user'])){
                            echo '<button id="addButton" class="btn btn-success ms-1">Add Product</button>';
                        }
                        ?>
                    </div>
                </div>
                <div class="row g-3 mt-1 justify-content-center justify-content-md-start">
                    <?php get_products(false); ?>
                </div>
            </div>
        </div>
    </main>
<?php
include_once('footer.php');
?>