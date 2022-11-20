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
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                <div class="card">
                    <button class="btn"><img src="../assets/img/Origin%20gamer%20pictures/gigabyte-b450m-s2h-cartes-meres.jpg" class="card-img-top w-50" alt="..." ></button>
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title dvjkjdvb djbvkjbjdjvjbjdbkjvj dvbjdbjkvbkjd vdbvj dkbvkbd .</p>
                        <div class="row">
                            <div class="col align-self-end">
                                <div class="p-1 mb-1 bg-danger rounded text-white text-center" style="font-size: 12px;">Save 50%</div>
                                <div class="text-success" style="font-size: 13px;">En stock (34)</div>
                                <input type="number" value="1" class="form-control" name="product-amount" id="product-amount" min="1"/>
                            </div>
                            <div class="col align-self-end">
                                <div class="fw-semibold">$ 1289.99</div>
                                <div class="fw-light text-decoration-line-through mb-1" style="font-size: 12px;">$ 1289.99</div>
                                <button class="btn btn-success w-100">Buy</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                <div class="card">
                    <button class="btn"><img src="../assets/img/Origin%20gamer%20pictures/gigabyte-b450m-s2h-cartes-meres.jpg" class="card-img-top w-50" alt="..." ></button>
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title dvjkjdvb djbvkjbjdjvjbjdbkjvj dvbjdbjkvbkjd vdbvj dkbvkbd .</p>
                        <div class="row">
                            <div class="col align-self-end">
                                <div class="p-1 mb-1 bg-danger rounded text-white text-center" style="font-size: 12px;">Save 50%</div>
                                <div class="text-success" style="font-size: 13px;">En stock (34)</div>
                                <input type="number" value="1" class="form-control" name="product-amount" id="product-amount" min="1"/>
                            </div>
                            <div class="col align-self-end">
                                <div class="fw-semibold">$ 1289.99</div>
                                <div class="fw-light text-decoration-line-through mb-1" style="font-size: 12px;">$ 1289.99</div>
                                <button class="btn btn-success w-100">Buy</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                <div class="card">
                    <button class="btn"><img src="../assets/img/Origin%20gamer%20pictures/gigabyte-b450m-s2h-cartes-meres.jpg" class="card-img-top w-50" alt="..." ></button>
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title dvjkjdvb djbvkjbjdjvjbjdbkjvj dvbjdbjkvbkjd vdbvj dkbvkbd .</p>
                        <div class="row">
                            <div class="col align-self-end">
                                <div class="p-1 mb-1 bg-danger rounded text-white text-center" style="font-size: 12px;">Save 50%</div>
                                <div class="text-success" style="font-size: 13px;">En stock (34)</div>
                                <input type="number" value="1" class="form-control" name="product-amount" id="product-amount" min="1"/>
                            </div>
                            <div class="col align-self-end">
                                <div class="fw-semibold">$ 1289.99</div>
                                <div class="fw-light text-decoration-line-through mb-1" style="font-size: 12px;">$ 1289.99</div>
                                <button class="btn btn-success w-100">Buy</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                <div class="card">
                    <button class="btn"><img src="../assets/img/Origin%20gamer%20pictures/gigabyte-b450m-s2h-cartes-meres.jpg" class="card-img-top w-50" alt="..." ></button>
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title dvjkjdvb djbvkjbjdjvjbjdbkjvj dvbjdbjkvbkjd vdbvj dkbvkbd .</p>
                        <div class="row">
                            <div class="col align-self-end">
                                <div class="p-1 mb-1 bg-danger rounded text-white text-center" style="font-size: 12px;">Save 50%</div>
                                <div class="text-success" style="font-size: 13px;">En stock (34)</div>
                                <input type="number" value="1" class="form-control" name="product-amount" id="product-amount" min="1"/>
                            </div>
                            <div class="col align-self-end">
                                <div class="fw-semibold">$ 1289.99</div>
                                <div class="fw-light text-decoration-line-through mb-1" style="font-size: 12px;">$ 1289.99</div>
                                <button class="btn btn-success w-100">Buy</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                <div class="card">
                    <button class="btn"><img src="../assets/img/Origin%20gamer%20pictures/gigabyte-b450m-s2h-cartes-meres.jpg" class="card-img-top w-50" alt="..." ></button>
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title dvjkjdvb djbvkjbjdjvjbjdbkjvj dvbjdbjkvbkjd vdbvj dkbvkbd .</p>
                        <div class="row">
                            <div class="col align-self-end">
                                <div class="p-1 mb-1 bg-danger rounded text-white text-center" style="font-size: 12px;">Save 50%</div>
                                <div class="text-success" style="font-size: 13px;">En stock (34)</div>
                                <input type="number" value="1" class="form-control" name="product-amount" id="product-amount" min="1"/>
                            </div>
                            <div class="col align-self-end">
                                <div class="fw-semibold">$ 1289.99</div>
                                <div class="fw-light text-decoration-line-through mb-1" style="font-size: 12px;">$ 1289.99</div>
                                <button class="btn btn-success w-100">Buy</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>