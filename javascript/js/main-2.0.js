
const elements = document.querySelectorAll(".spoiler");

const createSpoilerButton = (elem) => {
    //creates span .spoiler__content
    const span = document.createElement("span");
    span.className = "spoiler__content";
    span.innerHTML = elem.innerHTML;
    
    //creates btn
    const btn = document.createElement("button");
    btn.textContent = "Affiche le spoiler";
    
    //Add elements to DOM
    elem.innerHTML = "";
    elem.appendChild(btn);
    elem.appendChild(span);
    
    //click event
    btn.addEventListener("click", () => {
        span.classList.add("visible");
        btn.remove(btn);
    });
};

elements.forEach(elem => {
    createSpoilerButton(elem);
});