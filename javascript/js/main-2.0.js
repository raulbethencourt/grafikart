const ps = document.querySelectorAll("p");
for (let i = 0; i < ps.length; i++) {
    (function (p) {
        window.setInterval(function () {
            p.classList.toggle("red");
        }, 1500);
    })(ps[i]);
}

console.log(ps);