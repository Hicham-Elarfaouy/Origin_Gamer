<?php
$title = 'Home';
include_once('head.php');
include_once('header.php');

if (!isset($_SESSION['user'])) {
    header('location: ../index.php');
}
?>
    <main>
		<?php if (isset($_SESSION['message'])): ?>
            <div class="d-flex justify-content-center">
                <div class="alert alert-success alert-dismissible fade show mt-5 w-75">
                    <strong>Success : </strong>
                    <?php
                    echo $_SESSION['message'];
                    unset($_SESSION['message']);
                    ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            </div>
        <?php endif ?>
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
                <div class="row mt-4">
                    <div class="col-12">
                        <div class="card mb-4">
                            <div class="table-responsive">
                                <table class="table align-items-center mb-0">
                                    <thead>
                                    <tr class="text-uppercase text-secondary">
                                        <th>Product</th>
                                        <th>Categorie</th>
                                        <th>Amount</th>
                                        <th>Price</th>
                                        <th>Discount</th>
                                        <th>Description</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $result = get_products();
                                    while($row = mysqli_fetch_array($result)){
                                        echo "<tr class='align-middle'>
                                                <td>
                                                    <div class='d-flex'>
                                                        <img src='../assets/img/Origin%20gamer%20pictures/default.jpg' class='me-3 rounded' style='width: 40px; height: 40px;'>
                                                        <div class='align-self-center'>
                                                            <h6 class='mb-0'>$row[title]</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class='mb-0'>$row[categorie]</p>
                                                </td>
                                                <td>
                                                    <p class='mb-0'>$row[amount]</p>
                                                </td>
                                                <td>
                                                    <p class='mb-0'>$row[price]</p>
                                                </td>
                                                <td>
                                                    <p class='mb-0'>$row[discount]</p>
                                                </td>
                                                <td>
                                                    <p class='mb-0'>$row[description]</p>
                                                </td>
                                                <td>
                                                    <div class='d-flex justify-content-around'>
                                                        <i role='button' onclick='editProduct($row[id])' class='fa-solid fa-pen-to-square text-primary'></i>
                                                        <i role='button' onclick='deleteProduct($row[id])' class='fa-solid fa-trash-can text-danger ms-3'></i>
                                                    </div>
                                                </td>
                                            </tr>";
                                    }
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <div class="modal fade" id="modal">
		<div class="modal-dialog">
			<div class="modal-content">
				<form action="../php/script.php" method="POST" id="form-product" data-parsley-validate>
					<div class="modal-header">
						<h5 class="modal-title">Product</h5>
						<a href="#" class="btn-close" data-bs-dismiss="modal"></a>
					</div>
					<div class="modal-body">
							<input type="hidden" name="product-id" id="product-id">
                            <div class="mb-3">
                                <input type="file" class="form-control" name="product-image" id="product-image">
                            </div>
							<div class="mb-3">
								<label class="form-label">Title</label>
								<input type="text" class="form-control" name="product-title" id="product-title" data-parsley-pattern="[a-zA-Z0-9\s]+"
                               data-parsley-pattern-message="Title must contain Letters & numbers only."
                               data-parsley-trigger="keyup" required/>
							</div>
                            <div class="mb-3">
                                        <label class="form-label">Amount</label>
                                        <input type="number" class="form-control" name="product-amount" id="product-amount" data-parsley-trigger="keyup" min="1" required/>
                                    </div>
							<div class="mb-3">
								<label class="form-label">Categorie</label>
								<select class="form-select" id="product-categorie" name="product-categorie">
									<?php get_categories(); ?>
								</select>
							</div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label">Price</label>
                                        <input type="number" class="form-control" name="product-price" id="product-price" data-parsley-trigger="keyup" min="1" required/>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label">Discount</label>
                                        <input type="number" class="form-control" name="product-discount" id="product-discount" data-parsley-trigger="keyup" min="0" max="100" required/>
                                    </div>
                                </div>
                            </div>
							<div class="mb-0">
								<label class="form-label">Description</label>
								<textarea class="form-control" rows="5" id="product-description" name="product-description" data-parsley-pattern="[a-zA-Z0-9\s]+"
                               data-parsley-pattern-message="Description must contain Letters & numbers only."
                               data-parsley-trigger="keyup" required></textarea>
							</div>
						
					</div>
					<div class="modal-footer">
						<a href="#" class="btn btn-white" data-bs-dismiss="modal">Cancel</a>
						<button type="submit" name="update" class="btn btn-warning task-action-btn" id="product-update-btn">Update</button>
						<button type="submit" name="save" class="btn btn-primary task-action-btn" id="product-save-btn">Save</button>
					</div>
				</form>
			</div>
		</div>
	</div>
<?php
include_once('footer.php');
?>