const form = document.querySelector('form');
const passwordInput = document.getElementById('country');
const acceptConditions = document.getElementById('accept_conditions');


form.addEventListener('submit', function(event) {
  const passwordValue = passwordInput.value;
  if (!/[A-Z]/.test(passwordValue) || !/\d/.test(passwordValue)  ) {
    alert('Le mot de passe doit contenir au moins une majuscule et un chiffre.');
    event.preventDefault();
  }
});

form.addEventListener('submit', function(event) {
    if (!acceptConditions.checked) {
      event.preventDefault();
      alert('Vous devez accepter les conditions d\'utilisation pour continuer.');
    }
  });