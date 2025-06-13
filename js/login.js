const LoginFormValidation = {
    inputs: {
        email: document.getElementById("emailInputCo"),
        password: document.getElementById("passwordInputCo")
    },
    button: document.getElementById("btn-validCo"),

    init() {
        this.inputs.email.addEventListener("keyup", () => this.handleEmailInput());
        this.inputs.password.addEventListener("keyup", () => this.handlePasswordInput());
    },

    handleEmailInput() {
        const emailOk = this.validateEmail(this.inputs.email);
        this.button.disabled = !(emailOk);
    },

    handlePasswordInput() {
        const emailOk = this.validateEmail(this.inputs.email);
        const passwordOk = this.validatePassword(this.inputs.password);
        this.button.disabled = !(emailOk && passwordOk);
    },

    validateEmail(input) {
        const regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return this.toggleValidation(input, regex);
    },

    validatePassword(input) {
        const regex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[\W_])[A-Za-z\d\W_]{8,}$/;
        return this.toggleValidation(input, regex);
    },

    toggleValidation(input, regex) {
        const isValid = regex.test(input.value);
        input.classList.toggle("is-valid", isValid);
        input.classList.toggle("is-invalid", !isValid);
        return isValid;
    }

};
LoginFormValidation.init();


// Simulation de connexion
const emailInput = document.getElementById('emailInputCo');
const passwordInput = document.getElementById('passwordInputCo');
const loginButton = document.getElementById('btn-validCo');

loginButton.addEventListener('click', checkCredentials);

function checkCredentials() {

    if (emailInput.value == "test@mail.com" && passwordInput.value == "Password123$") {

        const token = "fake-jwt-token";
        setToken(token);

        setCookie(roleCookieName, "admin", 7);
        window.location.replace("/");
    } else {
        emailInput.classList.add('is-invalid');
        passwordInput.classList.add('is-invalid');
    }
}