// let utilizator = { nume: '', prenume: '' };
function Utilizator(nume, prenume) {
  this.nume = nume;
  this.prenume = prenume;
}

const form = document.querySelectorAll('.form');

const submitInput = form[0].querySelector('input[type="submit"]');

function getDataForm(e) {
  e.preventDefault();
  var formData = new FormData(form[0]);
  console.log(formData.get('nume'));
}

document.addEventListener(
  'DOMContentLoaded',
  function () {
    submitInput.addEventListener('click', getDataForm, false);
  },
  false
);

document.addEventListener('DOMContentLoaded', function () {
  submitInput.addEventListener('click', function () {
    document.location.href = 'contCreat.html';
  });
});
