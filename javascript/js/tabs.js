(function () {
    let afficherOnglet = function (a) {
        let li = a.parentNode;
        let div = a.parentNode.parentNode.parentNode;

        if (li.classList.contains('active')) {
            return false;
        }

        //ON RETIRE la class active de l'onglet actif
        div.querySelector('.tabs .active').classList.remove('active');
        //J'ajoute la class active à l'onglet actuel
        li.classList.add('active');

        //ON RETIRE la class active sur le contenu actif
        div.querySelector('.tab-content.active').classList.remove('active');
        //J'ajoute la class active sur le contenu correspondant à mon clic
        div.querySelector(a.getAttribute('href')).classList.add('active');
    }

    let tabs = document.querySelectorAll('.tabs a');

    for (let i = 0; i < tabs.length; i++) {
        const tab = tabs[i];
        tab.addEventListener('click', function (e) {
            afficherOnglet(this);
        });
    }

    let hash = window.location.hash;
    let a = document.querySelector('a[href="' + hash + '"]')

    if (a !== null && !a.parentNode.classList.contains('active')) {
        afficherOnglet(a);
    }
})()