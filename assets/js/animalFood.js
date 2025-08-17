document.addEventListener('DOMContentLoaded', function () {
    const breedSelect = document.getElementById('breed-select');
    const animalSelect = document.getElementById('animal-select');

    if (breedSelect && animalSelect) {
        breedSelect.addEventListener('change', function () {
            let breedId = this.value;

            // Vider les options actuelles
            animalSelect.innerHTML = '<option value="">-- Sélectionner un animal --</option>';

            if (breedId) {
                fetch('/animals/by-breed/' + breedId)
                    .then(response => response.json())
                    .then(data => {
                        data.forEach(function (animal) {
                            let option = document.createElement('option');
                            option.value = animal.id;
                            option.textContent = animal.name;
                            animalSelect.appendChild(option);
                        });
                    })
                    .catch(err => console.error('Erreur AJAX:', err));
            }
        });
    }
});