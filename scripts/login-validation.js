document.addEventListener("DOMContentLoaded", function() {
    const form = document.querySelector('.login-form');
    const usernameInput = document.getElementById('login-user-name');
    const passwordInput = document.getElementById('login-user-email');
    
    form.addEventListener('submit', function(event) {
        event.preventDefault();
        
        if (!validateUsername(usernameInput.value)) {
            showAlert(usernameInput, 'Please enter your username');
            return;
        }
        
        if (!validatePassword(passwordInput.value)) {
            showAlert(passwordInput, 'Please enter your password');
            return;
        }
        
        this.submit();
    });
    
    function validateUsername(username) {
        return username.trim() !== '';
    }
    
    function validatePassword(password) {
        return password.trim() !== '';
    }
    
    function showAlert(inputElement, message) {
        const existingAlert = inputElement.nextElementSibling;
        if (existingAlert && existingAlert.classList.contains('alert-text')) {
            existingAlert.remove();
        }
        
        const alertText = document.createElement('span');
        alertText.classList.add('alert-text', 'text-danger');
        alertText.textContent = message;
        
        inputElement.parentNode.insertBefore(alertText, inputElement.nextSibling);
    }
});