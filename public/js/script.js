
const btnAddMedicament = document.getElementById('btn-add-medicament');
const popup = document.getElementById('add-medicament-popup');

btnAddMedicament.addEventListener('click', function() {
    popup.classList.remove('hidden');
});

document.getElementById('btn-close-popup').addEventListener('click', function() {
    popup.classList.add('hidden');
});


const btnAddSpecialite = document.getElementById('btn-add-specialite');
const popu = document.getElementById('add-specialite-popup');

btnAddSpecialite.addEventListener('click', function() {
    popu.classList.remove('hidden');
});

document.getElementById('btn-close-popup').addEventListener('click', function() {
    popu.classList.add('hidden');
});