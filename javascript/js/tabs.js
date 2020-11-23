// Launch app
document.addEventListener("readystatechange", (evt) => {
	if (evt.target.readyState === "complete"){
		initApp();
	}
});

const initApp = () => {
    const tabs = document.querySelectorAll(".tabs a");
    const hash = window.location.hash;
    const a = document.querySelector('a[href="' + hash + '"]');

    const showTab = (a) => {
        const li = a.parentNode;
        const div = a.parentNode.parentNode.parentNode;

        if (li.classList.contains("active")) {
            return false;
        }

        //ON RETIRE la class active de l'onglet actif
        div.querySelector(".tabs .active").classList.remove("active");
        //J'ajoute la class active à l'onglet actuel
        li.classList.add("active");

        //ON RETIRE la class active sur le contenu actif
        div.querySelector(".tab-content.active").classList.remove("active");
        //J'ajoute la class active sur le contenu correspondant à mon clic
        div.querySelector(a.getAttribute("href")).classList.add("active");
    };

	tabs.forEach((tab) => {
		tab.addEventListener("click", () => showTab(this));
	});

	if (a !== null && !a.parentNode.classList.contains("active")) {
		showTab(a);
	}
};
