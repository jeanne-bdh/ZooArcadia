const hoursFormValidation = {
    selection: document.getElementById("daySelect"),
    inputs: {
        openTime: document.getElementById("openingHours"),
        closeTime: document.getElementById("closingHours")
    },
    button: document.getElementById("btn-hours"),

    init() {
        this.selection.addEventListener("change", () => this.buttonState());
        this.inputs.openTime.addEventListener("change", () => this.buttonState());
        this.inputs.closeTime.addEventListener("change", () => this.buttonState());
    },

    buttonState() {
        const dayOk = this.validateDaySelect(this.selection);
        const openOk = this.validateOpenInput(this.inputs.openTime);
        const closeOk = this.validateCloseInput(this.inputs.closeTime);
        this.button.disabled = !(dayOk && openOk && closeOk);
    },

    validateDaySelect(selection) {
        const isValid = selection.selectedIndex !== 0;
        selection.classList.toggle("is-invalid", !isValid);
        return isValid;
    },

    validateOpenInput(input) {
        const isValid = input.value !== "";
        input.classList.toggle("is-invalid", !isValid);
        return isValid;
    },

    validateCloseInput(input) {
        const isValid = input.value !== "";
        input.classList.toggle("is-invalid", !isValid);
        return isValid;
    },
};
hoursFormValidation.init();