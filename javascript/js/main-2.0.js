const elements = document.querySelectorAll(".spoiler");

let createSpoilerButton = (elem) => {
    //creates span .spoiler__content
    let span = document.createElement("span");
    span.className = "spoiler__content";
    span.innerHTML = elem.innerHTML;

    //creates button
    let button = document.createElement("button");
    button.textContent = "Affiche le spoiler";

    //Add elements to DOM
    elem.innerHTML = "";
    elem.appendChild(button);
    elem.appendChild(span);

    //click evenement
    button.addEventListener("click", function () {
        span.classList.add("visible");
        button.remove(button);
    });
};

elements.forEach(el => {
    createSpoilerButton(el);
});