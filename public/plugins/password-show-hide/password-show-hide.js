document.addEventListener('DOMContentLoaded', function () {
    const passwordField = document.getElementById('password');
    const confirmPasswordField = document.getElementById('password-confirm');
    const togglePassword = document.querySelector('.toggle-password');
    const toggleConfirmPassword = document.querySelector('.toggle-password-confirm');

    togglePassword.addEventListener('click', function () {
        togglePasswordFieldVisibility(passwordField, togglePassword);
    });

    toggleConfirmPassword.addEventListener('click', function () {
        togglePasswordFieldVisibility(confirmPasswordField, toggleConfirmPassword);
    });

    function togglePasswordFieldVisibility(field, toggleElement) {
        const fieldType = field.getAttribute('type');

        if (fieldType === 'password') {
            field.setAttribute('type', 'text');
            toggleElement.classList.remove('fa-eye');
            toggleElement.classList.add('fa-eye-slash');
        } else {
            field.setAttribute('type', 'password');
            toggleElement.classList.remove('fa-eye-slash');
            toggleElement.classList.add('fa-eye');
        }
    }
});
