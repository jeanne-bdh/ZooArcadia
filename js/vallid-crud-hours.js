const hoursFormValidation = {
    selctions: {
        day: document.getElementById("dayInput"),
        openTime: document.getElementById("openingHours"),
        closeTime: document.getElementById("closingHours")
    },
    button: document.getElementById("btn-hours"),

    init() {
        this.selection.day.addEventListener("keyup", () => this.handleEmailInput());
        this.selection.day.addEventListener("keyup", () => this.handlePasswordInput());
        this.inputs.confirmPassword.addEventListener("keyup", () => this.handleConfirmPwdInput());
        this.selection.addEventListener("change", () => this.handleRoleSelect());
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

    handleConfirmPwdInput() {
        const emailOk = this.validateEmail(this.inputs.email);
        const passwordOk = this.validatePassword(this.inputs.password);
        const confirmPwdOk = this.validateConfirmPassword(this.inputs.confirmPassword);
        this.button.disabled = !(emailOk && passwordOk && confirmPwdOk);
    },

    handleRoleSelect() {
        const emailOk = this.validateEmail(this.inputs.email);
        const passwordOk = this.validatePassword(this.inputs.password);
        const confirmPwdOk = this.validateConfirmPassword(this.inputs.confirmPassword);
        const roleOk = this.validateSelectRole(this.selection);
        this.button.disabled = !(emailOk && passwordOk && confirmPwdOk && roleOk);
    },

    validateEmail(input) {
        const regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return this.toggleValidation(input, regex);
    },

    validatePassword(input) {
        const regex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[\W_])[A-Za-z\d\W_]{8,}$/;
        return this.toggleValidation(input, regex);
    },

    validateConfirmPassword(input) {
        const passwordValue = this.inputs.password.value;
        const confirmPwdValue = this.inputs.confirmPassword.value;
        const isValid = passwordValue === confirmPwdValue;
        input.classList.toggle("is-valid", isValid);
        input.classList.toggle("is-invalid", !isValid);
        return isValid;
    },

    validateSelectRole(selection) {
        const isValid = selection.selectedIndex !== 0;
        selection.classList.toggle("is-valid", isValid);
        selection.classList.toggle("is-invalid", !isValid);
        return isValid;
    },

    toggleValidation(input, regex) {
        const isValid = regex.test(input.value);
        input.classList.toggle("is-valid", isValid);
        input.classList.toggle("is-invalid", !isValid);
        return isValid;
    }

};
RegisterFormValidation.init();