const servicesFormValidation = {
    inputs: {
        title: document.getElementById("titleServInput"),
        description: document.getElementById("descServInput"),
        icon: document.getElementById("iconServInput"),
        images: document.getElementById("imgServInput")
    },
    button: document.getElementById("btn-services"),

    init() {
        this.inputs.title.addEventListener("keyup", () => this.handleTitle());
        this.inputs.description.addEventListener("keyup", () => this.handleDesc());
        this.inputs.icon.addEventListener("keyup", () => this.handleIcon());
        this.inputs.images.addEventListener("keyup", () => this.handleImages());
    },

    handleTitle() {
        const titleOk = this.validateTitle(this.inputs.title);
        this.button.disabled = !titleOk;
    },

    handleDesc() {
        const titleOk = this.validateTitle(this.inputs.title);
        const descOk = this.validateDesc(this.inputs.description);
        this.button.disabled = !(titleOk && descOk);
    },

    handleIcon() {
        const titleOk = this.validateTitle(this.inputs.title);
        const descOk = this.validateDesc(this.inputs.description);
        const iconOk = this.validateIcon(this.inputs.icon);
        this.button.disabled = !(titleOk && descOk && iconOk);
    },

    handleImages() {
        const titleOk = this.validateTitle(this.inputs.title);
        const descOk = this.validateDesc(this.inputs.description);
        const iconOk = this.validateIcon(this.inputs.icon);
        const imagesOk = this.validateImages(this.inputs.images);
        this.button.disabled = !(titleOk && descOk && iconOk && imagesOk);
    },

    validateTitle(input) {
        const regex = /^.{5,}$/;
        return this.toggleValidation(input, regex);
    },

    validateDesc(input) {
        const regex = /^.{20,}$/;
        return this.toggleValidation(input, regex);
    },

    validateIcon(input) {
        const isValid = input.value !== "";
        input.classList.toggle("is-invalid", !isValid);
        return isValid;
    },

    validateImages(input) {
        const isValid = input.value !== "";
        input.classList.toggle("is-invalid", !isValid);
        return isValid;
    },

    toggleValidation(input, regex) {
        const isValid = regex.test(input.value);
        input.classList.toggle("is-invalid", !isValid);
        return isValid;
    }
};
servicesFormValidation.init();

document.querySelector("form").addEventListener("submit", function (e) {
    e.preventDefault(); // Empêche le rechargement

    const titleInput = servicesFormValidation.inputs.title;
    const descInput = servicesFormValidation.inputs.description;
    const iconInput = servicesFormValidation.inputs.icon;
    const imgInput = servicesFormValidation.inputs.images;

    // Vérifie à nouveau les champs
    const isFormValid =
        servicesFormValidation.validateTitle(titleInput) &&
        servicesFormValidation.validateDesc(descInput) &&
        servicesFormValidation.validateIcon(iconInput) &&
        servicesFormValidation.validateImages(imgInput);

    if (!isFormValid) {
        return;
    }

    const tbody = document.querySelector("table tbody");

    // Crée la nouvelle ligne
    const newRow = document.createElement("tr");

    // Crée les colonnes
    const titleTd = document.createElement("td");
    titleTd.textContent = titleInput.value;

    const descTd = document.createElement("td");
    descTd.innerHTML = descInput.value;

    const iconTd = document.createElement("td");
    iconTd.classList.add("text-center");
    const iconImg = document.createElement("img");
    iconImg.src = URL.createObjectURL(iconInput.files[0]);
    iconTd.appendChild(iconImg);

    const imgTd = document.createElement("td");
    imgTd.classList.add("text-center");
    const imgImg = document.createElement("img");
    imgImg.src = URL.createObjectURL(imgInput.files[0]);
    imgImg.classList.add("w-50");
    imgTd.appendChild(imgImg);

    const actionsTd = document.createElement("td");
    actionsTd.classList.add("text-center");
    actionsTd.innerHTML = `
        <button type="button" class="btn"><i class="bi bi-pencil-square"></i></button>
        <button type="button" class="btn"><i class="bi bi-eye"></i></button>
        <button type="button" class="btn"><i class="bi bi-trash3"></i></button>
    `;

    // Ajoute toutes les cellules à la ligne
    newRow.appendChild(titleTd);
    newRow.appendChild(descTd);
    newRow.appendChild(iconTd);
    newRow.appendChild(imgTd);
    newRow.appendChild(actionsTd);

    // Ajoute la ligne au tableau
    tbody.appendChild(newRow);

    // Réinitialise le formulaire
    e.target.reset();

    // Désactive à nouveau le bouton
    servicesFormValidation.button.disabled = true;
});
