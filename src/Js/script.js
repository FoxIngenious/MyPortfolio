
const cards = document.querySelectorAll('.servicesCard');

cards.forEach(card => {
    // On cherche le bouton spécifique à CETTE carte (ex: un enfant de la carte)
    const cardBttn = card.querySelector('.serviceRedirectio'); 

    if (cardBttn) {
        card.addEventListener('mouseenter', () => {
            cardBttn.classList.add('hoveredBttn');
        });
        
        // retirer la classe quand on quitte
        card.addEventListener('mouseleave', () => {
            cardBttn.classList.remove('hoveredBttn');
        });
    }
});