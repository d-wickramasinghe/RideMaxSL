function validatePassword() {
    var password = document.getElementById("password").value;
    var confirmPassword = document.getElementById("confirm_password").value;
    var message = document.getElementById("error-message");

    if (password !== confirmPassword) {
        message.style.color = "red";
        message.innerHTML = "Passwords do not match!";
        return false; 
    }
    return true; 
}