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
                    <?php
                    $result = get_products();
                    while($row = mysqli_fetch_array($result)){
                        $display = 'd-none';
                        $discount = $row['price'];
                        if($row['discount'] > 0){
                            $display = '';
                            $discount -= $row['price'] * ($row['discount'] / 100);
                        }
                        echo "<div class='col-xl-3 col-lg-4 col-md-6 col-sm-8'>
                                <div class='card'>
                                    <img src='../assets/img/Origin%20gamer%20pictures/default.jpg' class='card-img-top w-50 mt-3 rounded align-self-center'>
                                    <div class='card-body'>
                                        <p class='card-text'>$row[title]</p>
                                        <div class='row'>
                                            <div class='col align-self-end'>
                                                <div class='p-1 mb-1 bg-danger rounded text-white text-center $display' style='font-size: 12px;'>Save $row[discount]%</div>
                                                <div class='text-success' style='font-size: 13px;'>En stock ($row[amount])</div>
                                                <input type='number' value='1' class='form-control' name='amount' id='amount' min='1' max='$row[amount]'/>
                                            </div>
                                            <div class='col align-self-end'>
                                                <div class='fw-semibold'>$ $discount</div>
                                                <div class='fw-light text-decoration-line-through mb-1 $display' style='font-size: 12px;'>$ $row[price]</div>
                                                <button class='btn btn-success w-100'>Buy</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>";
                    }
                    ?>
                </div>
            </div>
        </div>
    </main>
<?php
include_once('footer.php');
?>