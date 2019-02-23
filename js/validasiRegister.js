function validasiRegister(){
    var username = document.getElementById('username');
    var password = document.getElementById('password');

    if (username.value == "") {
        alert("Mohon untuk mengisi username");
        username.focus();
        return false;
    }
    else if (password.value == "") {
        alert("Mohon untuk mengisi password");
        password.focus();
        return false;
    }
    else {
        return true;
    }
}