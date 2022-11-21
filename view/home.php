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
        <?php
            include_once ('components/list_products.php');
        ?>
    </main>

    <div class="modal fade" id="modal">
		<div class="modal-dialog">
			<div class="modal-content">
				<form action="../php/script.php" method="POST" id="form-product" data-parsley-validate>
					<div class="modal-header">
						<h5 class="modal-title">Add Product</h5>
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
						<button type="submit" name="delete" class="btn btn-danger task-action-btn" id="product-delete-btn">Delete</a>
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