<?php
$title = 'Sign Up';
include_once('head.php');
if (isset($_SESSION['user'])) {
    header('location: home.php');
}
include_once('header.php');
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
        <div class="container mt-5">
            <div class="row position-relative shadow rounded">
                <div id="secondSectionLogin" class="col-lg-6 col-md-12 p-5 rounded">
                    <form action="../php/script.php" method="post" id="formValidate"
                          class="text-start text-white" data-parsley-validate="">
                        <h4>SIGN UP</h4>
                        <h6 class="mb-4" style="font-weight: 300">Welcome to Origin Gamer</h6>
                        <input type="text" class="form-control mt-3" id="loginInput1" placeholder="First Name"
                               name="first_name" data-parsley-pattern="[a-zA-Z0-9]+"
                               data-parsley-pattern-message="Your First Name must contain Letters only."
                               data-parsley-trigger="keyup" required="">
                        <input type="text" class="form-control mt-3" id="loginInput3" placeholder="Last Name"
                               name="last_name" data-parsley-pattern="[a-zA-Z0-9]+"
                               data-parsley-pattern-message="Your Last Name must contain Letters only."
                               data-parsley-trigger="keyup" required="">
                        <input type="text" class="form-control mt-3" id="loginInput4" placeholder="Email" name="email"
                               data-parsley-type="email" data-parsley-trigger="keyup" required="">
                        <div class="input-group mt-3 position-relative">
                            <input id="loginInput2" type="password" class="form-control" name="pass"
                                   placeholder="Password" data-parsley-pattern="[a-zA-Z0-9$#@.%]{8,}"
                                   data-parsley-pattern-message="Your password must contain at least 8 Letters and numbers."
                                   data-parsley-trigger="keyup" required="">
                            <span class="input-group-text" onclick="togglePassword()"><i id="iconPassword"
                                                                                         class="fa fa-eye"></i></span>
                        </div>
                        <div class="d-flex justify-content-between align-items-center my-4">
                            <div class="form-check" onclick="checkAcceptSignup()">
                                <input class="form-check-input" type="checkbox" value="" id="checkAccept">
                                <label class="form-check-label" for="checkAccept" style="font-weight: 300">Accept Terms
                                    and Conditions</label>
                            </div>
                            <button id="btnSignup" name="signup" class="btn btn-success w-25" disabled>SIGN UP</button>
                        </div>
                        <p class="text-center" style="font-weight: 300">Already have an account ? <a href="login.php"
                                                                                                     class="text-success">LOGIN</a>
                        </p>
                    </form>
                </div>
                <div id="firstSectionLogin" class="col-lg-6 col-md-12 d-flex justify-content-center align-items-center">
                    <img class="w-75" src="../assets/img/ps5_1.png">
                </div>
            </div>
        </div>
    </main>
<?php
include_once('footer.php');
?>