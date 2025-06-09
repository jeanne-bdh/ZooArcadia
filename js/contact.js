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

ContactFormValidation.init();