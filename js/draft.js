const inputEmailCo = document.getElementById("emailInputCo");
const inputPasswordCo = document.getElementById("passwordInputCo");
const btnValidCo = document.getElementById("btn-validCo");

// Gestion du bouton
inputEmailCo.addEventListener("keyup", () => {
    const emailCoOk = validateEmailCo(inputEmailCo);
    btnValidCo.disabled = !(emailCoOk);
});

inputPasswordCo.addEventListener("keyup", () => {
    const emailCoOk = validateEmailCo(inputEmailCo);
    const passwordCoOk = validatePasswordCo(inputPasswordCo);
    btnValidCo.disabled = !(emailCoOk && passwordCoOk);
});

// Fonction valide l'email
function validateEmailCo(input) {
    const emailCoRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    const mailCoUser = input.value;
    if (mailCoUser.match(emailCoRegex)) {
        input.classList.add("is-valid");
        input.classList.remove("is-invalid");
        return true;
    }
    else {
        input.classList.remove("is-valid");
        input.classList.add("is-invalid");
        return false;
    }
}

// Fonction valide le mot de passe
function validatePasswordCo(input) {
    const passwordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[\W_])[A-Za-z\d\W_]{8,}$/;
    const passwordUser = input.value;
    if (passwordUser.match(passwordRegex)) {
        input.classList.add("is-valid");
        input.classList.remove("is-invalid");
        return true;
    }
    else {
        input.classList.remove("is-valid");
        input.classList.add("is-invalid");
        return false;
    }
}

//

const ContactFormValidation = {
    inputs: {
        title: document.getElementById("inputTitleContact"),
        email: document.getElementById("inputEmailContact"),
        message: document.getElementById("FormControlMessageContact")
    },
    button: document.getElementById("btn-contact"),

    init() {
        this.inputs.title.addEventListener("keyup", () => this.handleTitleInput());
        this.inputs.email.addEventListener("keyup", () => this.handleEmailInput());
        this.inputs.message.addEventListener("keyup", () => this.handleMessageInput());
    },

    handleTitleInput() {
        const titleOk = this.validateTitle(this.inputs.title);
        this.button.disabled = !titleOk;
    },

    handleEmailInput() {
        const titleOk = this.validateTitle(this.inputs.title);
        const emailOk = this.validateEmail(this.inputs.email);
        this.button.disabled = !(titleOk && emailOk);
    },

    handleMessageInput() {
        const titleOk = this.validateTitle(this.inputs.title);
        const emailOk = this.validateEmail(this.inputs.email);
        const msgOk = this.validateMessage(this.inputs.message);
        this.button.disabled = !(titleOk && emailOk && msgOk);
    },

    validateTitle(input) {
        const regex = /^.{5,}$/;
        return this.toggleValidation(input, regex);
    },

    validateEmail(input) {
        const regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return this.toggleValidation(input, regex);
    },

    validateMessage(input) {
        const regex = /^.{20,}$/;
        return this.toggleValidation(input, regex);
    },

    toggleValidation(input, regex) {
        const isValid = regex.test(input.value);
        input.classList.toggle("is-valid", isValid);
        input.classList.toggle("is-invalid", !isValid);
        return isValid;
    }
};

// Initialisation
ContactFormValidation.init();