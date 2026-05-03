document.addEventListener('DOMContentLoaded', () => {
    const splash = document.getElementById('splash-screen');
    const container = document.querySelector('.container');

    if (!container) {
        return;
    }

    /*
        Si la page n'a pas d'écran d'intro,
        on affiche directement le contenu.
        Cela évite le white screen sur livres.html, auteur.html, user.html, etc.
    */
    if (!splash) {
        container.classList.remove('intro-hidden');
        container.classList.add('intro-visible');
        return;
    }

    /*
        Mets cette constante à true si tu veux afficher l'intro
        une seule fois par session.
        Mets-la à false si tu veux afficher l'intro à chaque chargement de index.html.
    */
    const introUneSeuleFois = false;

    if (introUneSeuleFois && sessionStorage.getItem('introAlreadyPlayed') === 'true') {
        splash.remove();
        container.classList.remove('intro-hidden');
        container.classList.add('intro-visible');
        return;
    }

    setTimeout(() => {
        splash.classList.add('splash-hidden');

        container.classList.remove('intro-hidden');
        container.classList.add('intro-visible');

        if (introUneSeuleFois) {
            sessionStorage.setItem('introAlreadyPlayed', 'true');
        }

        setTimeout(() => {
            splash.remove();
        }, 500);

    }, 3000);
});