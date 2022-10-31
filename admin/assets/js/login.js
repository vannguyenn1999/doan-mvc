document.addEventListener('DOMContentLoaded', function() {
    // Mong muốn của chúng ta

    Validator({
        form: '#form-2',
        formGroupSelector: '.form-group',
        errorSelector: '.form-message',
        rules: [
            Validator.isRequired('#username'),
            Validator.isRequired('#password'),
        ],
        
    });
});