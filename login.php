<?php
$title = 'Login';
include_once('pages/header.php');
?>
    <main>
        <div class="container mt-5">
            <div class="row position-relative shadow rounded">
                <div id="firstSectionLogin" class="col-lg-6 col-md-12 d-flex justify-content-center align-items-center">
                    <img class="w-75" src="assets/img/ps5_2.png">
                </div>
                <div id="secondSectionLogin" class="col-lg-6 col-md-12 p-5 rounded">
                    <form id="formValidate" class="text-start text-white" data-parsley-validate="">
                        <h4>LOGIN</h4>
                        <h6 class="mb-4" style="font-weight: 300">Welcome to Origin Gamer</h6>
                        <input type="text" class="form-control mt-3" id="loginInput1" placeholder="Email" data-parsley-type="email" data-parsley-trigger="keyup" required="">
                        <div class="input-group mt-3 position-relative">
                            <input id="loginInput2" type="password" class="form-control" placeholder="Password" data-parsley-pattern="[aA1-zZ9]{8,}" data-parsley-pattern-message="Your password must contain at least 8 Letters and numbers." data-parsley-trigger="keyup" required="">
                            <span class="input-group-text" onclick="togglePassword()"><i id="iconPassword" class="fa fa-eye"></i></span>
                        </div>
                        <div class="d-flex justify-content-between align-items-center my-4">
                            <a href="#" class="text-white" style="font-weight: 300">Forgot Password ?</a>
                            <input type="submit" value="LOGIN" class="btn btn-success w-25"/>
                        </div>
                        <p class="text-center" style="font-weight: 300">Don't have an account ? <a href="signup.php" class="text-success">SIGN UP</a></p>
                    </form>
                </div>
            </div>
        </div>
    </main>
<?php
include_once('pages/footer.php');
?>