// Launch app
document.addEventListener("readystatechange", (evt) => {
	if (evt.target.readyState === "complete") {
		initApp();
	}
});

const initApp = () => {
    const httpRequest = new XMLHttpRequest();

    httpRequest.open('GET', '/javascript/ajax/test.php?city=montpellier', true);
    httpRequest.send();
};

// TODO AJAX 6:47 
