// scripts.js

// Sélectionnez le lien ou le bouton pour ouvrir la modale
const openModalButton = document.getElementById('open-modal');

// Sélectionnez la modale
const modal = document.querySelector('.modal');

// Ajoutez un écouteur d'événement au lien/bouton
openModalButton.addEventListener('click', () => {
    modal.style.display = 'block'; // Affiche la modale
});

// Ajoutez un écouteur d'événement pour fermer la modale
modal.addEventListener('click', (event) => {
    if (event.target === modal) {
        modal.style.display = 'none'; // Cache la modale lorsque l'utilisateur clique en dehors d'elle
    }
});

