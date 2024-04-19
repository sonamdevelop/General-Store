document.addEventListener("DOMContentLoaded", function() {
    const form = document.querySelector('.reg-form');
    const userNameInput = document.getElementById('user-name');
    const emailInput = document.getElementById('user-email');
    const passwordInput = document.getElementById('user-pass');
    const confirmPasswordInput = document.getElementById('user-confirm-pass');
    
    form.addEventListener('submit', function(event) {
        event.preventDefault();
        
        if (!validateUsername(userNameInput.value)) {
            showAlert(userNameInput, 'Username must be at least 3 characters long');
            return;
        }
        
        if (!validateEmail(emailInput.value)) {
            showAlert(emailInput, 'Invalid email address');
            return;
        }
        
        if (!validatePassword(passwordInput.value)) {
            showAlert(passwordInput, 'Password must be at least 6 characters long');
            return;
        }

        if (passwordInput.value !== confirmPasswordInput.value) {
            showAlert(confirmPasswordInput, 'Passwords do not match');
            return;
        }
        
        this.submit();
    });
    
    function validateUsername(username) {
        return username.length >= 3;
    }
    
    function validateEmail(email) {
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailRegex.test(email);
    }
    
    function validatePassword(password) {
        return password.length >= 6;
    }
    
    function showAlert(inputElement, message) {
        const removeAlert = () => {
            const existingAlert = inputElement.nextElementSibling;
            if (existingAlert && existingAlert.classList.contains('alert-text')) {
                existingAlert.remove();
            }
        };
        setTimeout(removeAlert, 1000);
        
        const alertText = document.createElement('span');
        alertText.classList.add('alert-text', 'text-danger');
        alertText.textContent = message;
        
        inputElement.parentNode.insertBefore(alertText, inputElement.nextSibling);
    }

});