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
                    if(isset($_SESSION['user']) && $_SESSION['user'][4]){
                        echo '<button class="btn btn-success ms-1">Add Product</button>';
                    }
                ?>
            </div>
        </div>
        <div class="row g-3 mt-1 justify-content-center justify-content-md-start">
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                <button class="card">
                    <img src="../assets/img/Origin%20gamer%20pictures/gigabyte-b450m-s2h-cartes-meres.jpg" class="card-img-top p-4" alt="..." >
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </button>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                <div class="card">
                    <img src="../assets/img/Origin%20gamer%20pictures/skillchairs-adventure-series-siege.jpg" class="card-img-top p-4" alt="..." >
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                <div class="card">
                    <img src="../assets/img/Origin%20gamer%20pictures/intel-core-i5-12400f-25-ghz-44-ghz-processeurs.jpg" class="card-img-top p-4" alt="..." >
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                <div class="card">
                    <img src="../assets/img/Origin%20gamer%20pictures/logitech-g933-artemis-spectrum-rgb-wireless-71-surround-gaming-headset-blanc-casques.jpg" class="card-img-top p-4" alt="..." >
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                <div class="card">
                    <img src="../assets/img/Origin%20gamer%20pictures/samsung-ssd-980-pro-m2-pcie-nvme-1tb-disques-ssd.jpg" class="card-img-top p-4" alt="..." >
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>