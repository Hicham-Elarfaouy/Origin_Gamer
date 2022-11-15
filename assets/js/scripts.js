$(document).ready(function (){
    $('#formValidate').parsley();
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