const foodConsoFormValidation = {
    selections: {
        animal: document.getElementById("animalSelect"),
        name: document.getElementById("nameSelect"),
        food: document.getElementById("foodSelect")
    },
    inputs: {
        date: document.getElementById("dateFood"),
        hour: document.getElementById("hourFood"),
        quantity: document.getElementById("quantity")
    },
    button: document.getElementById("btn-food-conso"),

    init() {
        this.selections.animal.addEventListener("change", () => this.buttonState());
        this.selections.name.addEventListener("change", () => this.buttonState());
        this.selections.food.addEventListener("change", () => this.buttonState());
        this.inputs.date.addEventListener("change", () => this.buttonState());
        this.inputs.hour.addEventListener("change", () => this.buttonState());
        this.inputs.quantity.addEventListener("change", () => this.buttonState());
    },

    buttonState() {
        const animalOk = this.validateAnimalSelect(this.selections.animal);
        const nameOk = this.validateNameSelect(this.selections.name);
        const foodOk = this.validateFoodSelect(this.selections.food);
        const dateOk = this.validateDateInput(this.inputs.date);
        const hourOk = this.validateHourInput(this.inputs.hour);
        const quantityOk = this.validateQtyInput(this.inputs.quantity);
        this.button.disabled = !(animalOk && nameOk && foodOk && dateOk && hourOk && quantityOk);
    },

    validateAnimalSelect(selection) {
        const isValid = selection.selectedIndex !== 0;
        selection.classList.toggle("is-invalid", !isValid);
        return isValid;
    },

    validateNameSelect(selection) {
        const isValid = selection.selectedIndex !== 0;
        selection.classList.toggle("is-invalid", !isValid);
        return isValid;
    },

    validateFoodSelect(selection) {
        const isValid = selection.selectedIndex !== 0;
        selection.classList.toggle("is-invalid", !isValid);
        return isValid;
    },

    validateDateInput(input) {
        const isValid = input.value !== "";
        input.classList.toggle("is-invalid", !isValid);
        return isValid;
    },

    validateHourInput(input) {
        const isValid = input.value !== "";
        input.classList.toggle("is-invalid", !isValid);
        return isValid;
    },

    validateQtyInput(input) {
        const isValid = input.value !== "";
        input.classList.toggle("is-invalid", !isValid);
        return isValid;
    },
};
foodConsoFormValidation.init();