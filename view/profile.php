<?php
$title = 'Profile';
include_once('head.php');
include_once('header.php');

if (!isset($_SESSION['user'])) {
    header('location: ../index.php');
}
?>
    <main>
        <?php if (isset($_SESSION['message'])): ?>
            <div class="d-flex justify-content-center">
                <div class="alert alert-danger alert-dismissible fade show mt-5 w-75">
                    <strong>Error : </strong>
                    <?php
                    echo $_SESSION['message'];
                    unset($_SESSION['message']);
                    ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            </div>
        <?php endif ?>
        <div class="d-flex m-5">
            <div class="row w-100 justify-content-center">
                <div class="col-12 col-md-6 col-xl-4">
                    <div class="card">
                        <div class="card-header pb-0">
                            <h6 class="mb-">Edit Profile</h6>
                        </div>
                        <div class="card-body">
                            <form action="../php/script.php" method="post" id="form-profile" data-parsley-validate>
                                <input type="hidden" name="user-id" id="user-id" value="<?= $_SESSION['user'][0] ?>">
                                <div class="mb-3">
                                    <label class="form-label">First Name : </label>
                                    <input type="text" class="form-control" placeholder="First Name" value="<?= $_SESSION['user'][1] ?>"
                                           name="first_name" data-parsley-pattern="[a-zA-Z0-9]+"
                                           data-parsley-pattern-message="Your First Name must contain Letters only."
                                           data-parsley-trigger="keyup" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Last Name : </label>
                                    <input type="text" class="form-control" placeholder="Last Name" value="<?= $_SESSION['user'][2] ?>"
                                           name="last_name" data-parsley-pattern="[a-zA-Z0-9]+"
                                           data-parsley-pattern-message="Your Last Name must contain Letters only."
                                           data-parsley-trigger="keyup" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Email : </label>
                                    <input type="text" class="form-control" placeholder="Email" name="email" value="<?= $_SESSION['user'][3] ?>"
                                           data-parsley-type="email" data-parsley-trigger="keyup" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Old Password : </label>
                                    <input type="password" class="form-control" name="old_pass"
                                           placeholder="Old Password" data-parsley-pattern="[a-zA-Z0-9$#@.%]{8,}"
                                           data-parsley-pattern-message="Your password must contain at least 8 Letters and numbers."
                                           data-parsley-trigger="keyup" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">New Password : </label>
                                    <input type="password" class="form-control" name="new_pass"
                                           placeholder="New Password" data-parsley-pattern="[a-zA-Z0-9$#@.%]{8,}"
                                           data-parsley-pattern-message="Your password must contain at least 8 Letters and numbers."
                                           data-parsley-trigger="keyup">
                                </div>
                                <button type="submit" name="profile" class="btn btn-success w-100 mt-3">Save</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
<?php
include_once('footer.php');
?>