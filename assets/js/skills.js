const cardList = document.querySelectorAll('.show-card');
const skillsToggle = document.querySelector('#skills-button');

skillsToggle.addEventListener('click', () => {
    cardList.forEach(card => {
        const visibility = card.getAttribute('data-visible');

        if (visibility === 'false') {
            card.setAttribute('data-visible', 'true');
            skillsToggle.innerHTML = 'Hide Skills';
        } else {
            card.setAttribute('data-visible', 'false');
            skillsToggle.innerHTML = 'Show More Skills';
        }
    });
});