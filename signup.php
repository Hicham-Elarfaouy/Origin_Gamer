<?php
$title = 'Sign Up';
include_once('pages/header.php');
?>
    <main>
        <div class="container mt-5">
            <div class="row position-relative shadow rounded">
                <div id="secondSectionLogin" class="col-lg-6 col-md-12 p-5 rounded">
                    <form id="formValidate" class="text-start text-white" data-parsley-validate="">
                        <h4>SIGN UP</h4>
                        <h6 class="mb-4" style="font-weight: 300">Welcome to Origin Gamer</h6>
                        <input type="text" class="form-control mt-3" id="loginInput1" placeholder="First Name" data-parsley-pattern="[aA1-zZ9\s]+" data-parsley-pattern-message="Your First Name must contain Letters only." data-parsley-trigger="keyup" required="">
                        <input type="text" class="form-control mt-3" id="loginInput3" placeholder="Last Name" data-parsley-pattern="[aA1-zZ9\s]+" data-parsley-pattern-message="Your Last Name must contain Letters only." data-parsley-trigger="keyup" required="">
                        <input type="text" class="form-control mt-3" id="loginInput4" placeholder="Email" data-parsley-type="email" data-parsley-trigger="keyup" required="">
                        <div class="input-group mt-3 position-relative">
                            <input id="loginInput2" type="password" class="form-control" placeholder="Password" data-parsley-pattern="[aA1-zZ9]{8,}" data-parsley-pattern-message="Your password must contain at least 8 Letters and numbers." data-parsley-trigger="keyup" required="">
                            <span class="input-group-text" onclick="togglePassword()"><i id="iconPassword" class="fa fa-eye"></i></span>
                        </div>
                        <div class="d-flex justify-content-between align-items-center my-4">
                            <div class="form-check" onclick="checkAcceptSignup()">
                                <input class="form-check-input" type="checkbox" value="" id="checkAccept">
                                <label class="form-check-label" for="checkAccept"  style="font-weight: 300">Accept Terms and Conditions</label>
                            </div>
                            <button id="btnSignup" class="btn btn-success w-25" disabled>SIGN UP</button>
                        </div>
                        <p class="text-center" style="font-weight: 300">Already have an account ? <a href="login.php" class="text-success">LOGIN</a></p>
                    </form>
                </div>
                <div id="firstSectionLogin" class="col-lg-6 col-md-12 d-flex justify-content-center align-items-center">
                    <img class="w-75" src="assets/img/ps5_1.png">
                </div>
            </div>
        </div>
    </main>
<?php
include_once('pages/footer.php');
?>