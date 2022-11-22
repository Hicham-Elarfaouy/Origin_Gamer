<?php
$title = 'Login';
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

        </div>
        <div class="container mt-5">
            <div class="row position-relative shadow rounded">
                <div id="firstSectionLogin" class="col-lg-6 col-md-12 d-flex justify-content-center align-items-center">
                    <img class="w-75" src="../assets/img/ps5_2.png">
                </div>
                <div id="secondSectionLogin" class="col-lg-6 col-md-12 p-5 rounded">
                    <form action="../php/script.php" method="post" id="formValidate"
                          class="text-start text-white"
                          data-parsley-validate="">
                        <h4>LOGIN</h4>
                        <h6 class="mb-4" style="font-weight: 300">Welcome to Origin Gamer</h6>
                        <input type="text" class="form-control mt-3" id="loginInput1" name="email" placeholder="Email"
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
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="check" name="remember">
                                <label class="form-check-label" for="check" style="font-weight: 300">Remember Me</label>
                            </div>
                            <input type="submit" name="login" value="LOGIN" class="btn btn-success w-25"/>
                        </div>
                        <p class="text-center" style="font-weight: 300">
                            Don't have an account ?
                            <a href="signup.php" class="text-success">SIGN UP</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </main>
<?php
include_once('footer.php');
?>