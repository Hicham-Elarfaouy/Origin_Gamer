<?php
session_start();

include('database.php');

if (isset($_POST['login']))         check_login(validate_input($_POST["email"], 'email'), validate_input($_POST["pass"], 'pass'));
if (isset($_POST['signup']))        sign_up();
if (isset($_POST['save']))          save_product();
if (isset($_POST['update']))        update_product();
if(isset($_POST['openProduct']))    get_specific_product($_POST['openProduct']);

function check_login($email, $pass): void
{
    if($email=='null' || $pass=='null'){
        $_SESSION['message'] = "Invalid inputs !";
        header('location: ../view/login.php');
        die();
    }

    $link = connection();

    $sql = "SELECT * FROM users where email = '$email'";

    if ($result = mysqli_query($link, $sql)) {
        $row = mysqli_fetch_array($result);
        if (mysqli_num_rows($result) > 0 && password_verify($pass, $row['pass'])) {
            $_SESSION['user'] = [$row['id'], $row['first_name'], $row['last_name'], $row['email'], $row['is_admin']];
            header('location: ../view/home.php');
            die();
        }
    }

    $_SESSION['message'] = "Incorrect information, please check it !";
    header('location: ../view/login.php');
    

    // Close connection
    mysqli_close($link);
}

function sign_up(): void
{
    $first_name = validate_input($_POST["first_name"], 'text');
    $last_name = validate_input($_POST["last_name"], 'text');
    $email = validate_input($_POST["email"], 'email');
    $pass = validate_input($_POST["pass"], 'pass');

    if($first_name=='null' || $last_name=='null' || $email=='null' || $pass=='null'){
        $_SESSION['message'] = "Invalid inputs !";
        header('location: ../view/signup.php');
        die();
    }

    $link = connection();

    $sql = "SELECT * FROM users where email = '$email'";
    if ($result = mysqli_query($link, $sql)) {
        if (mysqli_num_rows($result) > 0) {
            $_SESSION['message'] = "Already exist this email, login !";
            header('location: ../view/login.php');
            die();
        }
    }

    $hash = password_hash($pass, PASSWORD_DEFAULT);

    $sql = "INSERT INTO users VALUES ('', '$first_name', '$last_name', '$email', '$hash', false)";

    if (mysqli_query($link, $sql)) {
        check_login($email, $pass);
    } else {
        $_SESSION['message'] = "Incorrect information, please check it !";
        header('location: ../view/signup.php');
    }

    // Close connection
    mysqli_close($link);
}

function validate_input($input, $type): string
{
    return match ($type) {
        "text" => preg_match("/^[a-zA-Z0-9]+$/", $input) ? $input : 'null',
        "pass" => preg_match("/^[a-zA-Z0-9$#@.%]{8,}$/", $input) ? $input : 'null',
        "email" => filter_var($input, FILTER_VALIDATE_EMAIL) ? $input : 'null',
        default => "null",
    };
}

function get_categories(): void
{
    $link = connection();

    $sql = "SELECT * FROM categories";
    
    if($result = mysqli_query($link, $sql)){
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_array($result)){
                echo "<option value='$row[id]'>$row[name]</option>";
            }
        }
    }
        
    // Close connection
    mysqli_close($link);
}

function get_products($admin): void
{
    $link = connection();

    $sql = "SELECT * FROM products ORDER BY id DESC";
    
    if($result = mysqli_query($link, $sql)){
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_array($result)){
                $admin = $admin ? "onclick=editProduct($row[id])" : '';
                $display = 'd-none'; 
                $discount = $row['price'];
                if($row['discount'] > 0){
                    $display = ''; 
                    $discount = $row['price'] * ($row['discount'] / 100);
                }
                echo "<div class='col-xl-3 col-lg-4 col-md-6 col-sm-8'>
                        <div class='card'>
                            <button $admin class='btn'><img src='../assets/img/Origin%20gamer%20pictures/default.jpg' class='card-img-top w-50 rounded'></button>
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
        }
    }
        
    // Close connection
    mysqli_close($link);
}

function get_specific_product($id): void
{
    header('Content-Type: application/json');
    $aResult = [];
    $link = connection();

    $sql = "SELECT * FROM products where id = $id";
    if($result = mysqli_query($link, $sql)){
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_array($result)){
                $aResult[0] = $row['title'];
                $aResult[1] = $row['amount'];
                $aResult[2] = $row['categorie'];
                $aResult[3] = $row['price'];
                $aResult[4] = $row['discount'];
                $aResult[5] = $row['description'];
            }
            // Free result set
            mysqli_free_result($result);
        }
    }

    // Close connection
    mysqli_close($link);
    echo json_encode($aResult);
}

function save_product(): void
{
    $link = connection();

    $title = $_POST["product-title"];
    $amount = $_POST["product-amount"];
    $categorie = $_POST["product-categorie"];
    $price = $_POST["product-price"];
    $discount = $_POST["product-discount"];
    $description = $_POST["product-description"];

    $sql = "INSERT INTO products VALUES ('', '$title', '$amount', '$categorie', '$price', '$discount', '$description')";
    mysqli_query($link, $sql);
    
    // Close connection
    mysqli_close($link);
    
    $_SESSION['message'] = "Product has been added successfully !";
    header('location: ../view/home.php');
}

function update_product(): void
{
    $link = connection();

    $id = $_POST["product-id"];
    $title = $_POST["product-title"];
    $amount = $_POST["product-amount"];
    $categorie = $_POST["product-categorie"];
    $price = $_POST["product-price"];
    $discount = $_POST["product-discount"];
    $description = $_POST["product-description"];

    $sql = "UPDATE products SET `title`='$title',`amount`='$amount',`categorie`='$categorie',`price`='$price',`discount`='$discount',`description`='$description' WHERE `id`='$id'";
    mysqli_query($link, $sql);

    // Close connection
    mysqli_close($link);

    $_SESSION['message'] = "Product has been updated successfully !";
    header('location: ../view/home.php');
}