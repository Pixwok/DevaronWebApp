const burger = document.querySelector('#burger-btn');
const mobilenav = document.querySelector('#mobile-navlink');

//Main NAV
if (burger !== null) {
    burger.addEventListener('click', () => {
        if (burger.className != 'open' && mobilenav!= 'open') {
            burger.className = 'open';
            mobilenav.className = 'open';
        } else {
            burger.classList.remove('open');
            mobilenav.classList.remove('open');
        }
    });
}

//Fermeture menu si clique en dehors
document.addEventListener('click', (event) => {
    if (!mobilenav.contains(event.target) && !burger.contains(event.target)) {
        burger.classList.remove('open');
        mobilenav.classList.remove('open');
    }
})