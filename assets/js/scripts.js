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