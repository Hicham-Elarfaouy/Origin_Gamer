$(document).ready(function (){
    $('#formValidate').parsley();
    $('#form-product').parsley();
});

function togglePassword(){
    const togglePassword = document.querySelector('#iconPassword');
    const password = document.querySelector('#loginInput2');

    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);

    togglePassword.classList.toggle('fa-eye');
    togglePassword.classList.toggle('fa-eye-slash');
}

function  checkAcceptSignup(){
    const  check = document.querySelector('#checkAccept');
    const  btnSignup = document.querySelector('#btnSignup');

    if(check.checked){
        btnSignup.disabled = false;
    } else {
        btnSignup.disabled = true;
    }
}

document.querySelector("#addButton").addEventListener("click", ()=>{
    // document.querySelector("#form-product").reset();

    // Open Modal
    $("#modal").modal('show');

    // document.querySelector("#product-save-btn").style.display = 'block';
    // document.querySelector("#product-delete-btn").style.display = 'none';
    // document.querySelector("#product-update-btn").style.display = 'none';
});

function editProduct(id){
    $.ajax({
        type: "POST",
        url: '../php/script.php',
        data: {openProduct : id},
        success: function (obj) {
            document.getElementById('product-title').value       = obj[0];
            document.getElementById('product-amount').value      = obj[1];
            document.getElementById('product-categorie').value   = obj[2];
            document.getElementById('product-price').value       = obj[3];
            document.getElementById('product-discount').value    = obj[4];
            document.getElementById('product-description').value = obj[5];
        }
    });

    $("#modal").modal('show');
    console.log(id);

    // document.querySelector("#product-save-btn").style.display = 'none';
    // document.querySelector("#product-delete-btn").style.display = 'block';
    // document.querySelector("#product-update-btn").style.display = 'block';
    //
    document.querySelector("#product-id").value = id;
}

function deleteProduct(id){
    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                type: "POST",
                url: '../php/script.php',
                data: {delete : id},
                success: function (obj) {
                    location.reload();
                }
            });
        }
    });
}