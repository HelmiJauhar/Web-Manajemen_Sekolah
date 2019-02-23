function validasiLogin() {
    var username = document.getElementById('username');
    var password = document.getElementById('password');
    
if (username.value == "") {
        alert("Anda belum mengisi Username");
        username.focus();
        return false;
      }
else if (password.value == "") {
        alert("Anda belum mengisi Password");
        password.focus();
        return false;
      }
else
{
    return true;
}
}