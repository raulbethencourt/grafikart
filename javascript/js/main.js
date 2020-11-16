let eleve = {
    nom: "eleve",
    age: 15,
    sex: "leton",

    moyenne: function () {
        return 10;
    },

    present: function () {
        //debugger;
        return this.nom + " presente";
    },
};

let demo = "salut";
console.log(demo);

let luther = {
    nom: "Luther",
    age: 14,
    moyenne: 15,
};

if (luther["age"] > 16 || luther["age"] === null) {
    console.log("tu es majeur !");
} else if (luther["age"] > 14 && luther["age"] <= 16) {
    console.log("ya casi estas");
} else {
    console.log("esperarte !");
}

switch (luther["age"]) {
    case 18:
        console.log("bravo tienes 18 anyos");
        break;
    case 25:
        console.log("bravo, tienes un cuarto de siglo");
        break;
    case 50:
        console.log("bravo, tienes medio siglo");
        break;
    default:
        break;
}

console.log(luther["age"] >= 18 ? "eres mayor de edad" : "eres menor de edad");

console.log("Silence is golden");

let jean = Object.create(eleve);
jean.nom = "Jean";

let i = 0;
while (i < 10) {
    console.log(i);
    i++;
}

for (let i = 0; i < 10; i++) {
    console.log(i);
}

let personas = ["raul", "jairo", "luicho", "sara"];
for (let i = 0; i < personas.length; i++) {
    let persona = personas[i];
    console.log(persona);
}

let nombre = 97;
let estPremier = true;

for (let i = 2; i < nombre; i++) {
    if (nombre % i === 0) {
        estPremier = false;
        console.log("este numero no es par");
        console.log(nombre + " es divisible por " + i);
        break;
    }
}
if (estPremier) {
    console.log(nombre + " es par");
}

let eleves = [{
        nom: "raul",
        media: 8,
    },
    {
        nom: "jairo",
        media: 6,
    },
    {
        nom: "luicho",
        media: 7,
    },
    {
        nom: "sari",
        media: 2,
    },
];

for (let i = 0; i < eleves.length; i++) {
    let eleve = eleves[i];
    if (eleve["media"] >= 5) {
        console.log(eleve["nom"] + " maquinote");
    } else {
        console.log(eleve["nom"] + " chiquito inutil");
    }
}

console.log(eleves[2]["nom"], eleves[1]["media"]);

function pair(nombre) {
    for (let i = 2; i < nombre; i++) {
        if (nombre % i === 0) {
            return false;
        }
    }
    return true;
}

if (pair(1)) {
    console.log("es impar");
} else {
    console.log("es par");
}

let media = (eleves) => {
    for (let i = 0; i < eleves.length; i++) {
        let eleve = eleves[i];
        if (eleve["media"] >= 5) {
            console.log(eleve["nom"] + " maquinote");
        }
    }
};

media(eleves);

let lamedia = (eleves) => {
    let media = [];

    for (let i = 0; i < eleves.length; i++) {
        let eleve = eleves[i];
        if (eleve["media"] >= 5) {
            media.push(eleve["nom"]);
        }
    }
    return media;
};

console.log(lamedia(eleves));

let phrase =
    "There are many letiations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable.The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non - characteristic words etc.";

let frequence = (phrase) => {
    let mots = phrase.toLowerCase().split(" ");
    let compteur = {};
    for (let i = 0; i < mots.length; i++) {
        let mot = mots[i];
        if (compteur[mot] === undefined) {
            compteur[mot] = 1;
        } else {
            compteur[mot]++;
        }
    }
    return compteur;
}

console.log(frequence(phrase));

let eleve1 = {
    nom: "Jean",
    notes: [15, 16, 18, 2],
}
let eleve2 = {
    nom: "Marc",
    notes: [5, 18, 20, 19],
}

let moyenne = (notes) => {
    let somme = 0;
    for (let i = 0; i < notes.length; i++) {
        somme += notes[i];
    }
    return somme / notes.length;
}

let estMeilleur = (a, b) => {
    return moyenne(a["notes"]) > moyenne(b["notes"]);
}
console.log(estMeilleur(eleve1, eleve2));

const alumno = {
    nom: "Jean",
    present: () => {
        let self = this;
        let demo = {
            demo: () => {
                console.log(self.nom);
            },
        };
        demo.demo();
        console.log(self["nom"] + " présent");
    },
};
alumno.present();

/****************** 
 * The prototypes * 
 ******************/

const estudiante = {
    media() {
        let somme = 0;
        let notes = this["notes"];
        for (let i = 0; i < notes.length; i++) {
            somme = somme + notes[i];
        }
        return somme / notes.length;
    },
    present() {
        console.log(this["nom"] + " présent");
    },
};
const raul = {
    nom: "Raul",
    notes: [20, 20, 15],
};
const jairo = {
    nom: "Jairo",
    notes: [15, 13, 12],
};
raul.__proto__ = estudiante; // no utilisar nunca este sistema
jairo.__proto__ = estudiante;

let marion = Object.create(estudiante); // buena manera de crear con prototipo
marion.notes = [18, 19, 18];
marion.nom = "Marion";

console.log(raul.media());
console.log(jairo.present());

// Constructor JS equivalent 
const Trabajador = function (nom, notes) {
    this.nom = nom;
    this.notes = notes;
};

// Adding functions to the Class/Object Trabajador
Trabajador.prototype.media = function () {
    let somme = 0;
    notes = this.notes;
    for (let i = 0; i < this.notes.length; i++) {
        somme = somme + notes[i];
    }
    return somme / notes.length;
};

Trabajador.prototype.sing = function () {
    return "Lalalala " + this.nom;
}

// Object instance
const sara = new Trabajador("Sara", [20, 16, 13]);
const luicho = new Trabajador("Luicho", [14, 16, 12]);


/************* 
 * Try Catch * 
 *************/

let a = {};

try {
    a.maMethode(); //we try the code
} catch (e) {
    console.log("J'ai rencontré une erreur " + e.stack); // We catch the error
} finally {
    console.log("finally"); // We execute the code no mather what happen
}

// We throw new error in certain cases, usually inside functions that could fail
let demo = nombre => {
    if (nombre > 5) {
        throw new Error('El numero no puede ser superior a 5', 'test', 14);
    }
    return nombre * 2;
}


/***************** 
 * Window Object * 
 *****************/

(() => {
    window.alert("Salut les gens"); // Shows an alert sign with our message

    let demo = window.prompt("entra tu respuesta"); // You can enter information
    console.log(demo);

    let test = window.confirm("El universo se destruye poco a poco"); // Question true or false
    console.log(test);
})();

// Work with variables inside a function protected as from have a variable that move every where
(() => {
    let numero = window.prompt("Elige un numero entre 1 y 10");
    let deviner = Math.round(Math.random() * 10); // Random number 
    while (numero != deviner) {
        console.log(numero);
        if (numero < 1 || numero > 10) {
            numero = window.prompt(
                "Ese numero no es entre 1 y 10. Elige un numero entre 1 y 10"
            );
        } else if (numero < deviner && numero > 1) {
            numero = window.prompt("Mas arriba. Elige un numero entre 1 y 10");
        } else {
            numero = window.prompt("Mas abajo. Elige un numero entre 1 y 10");
        }
    }
    window.alert("bravo, acertaste");

    // Here we set an interval base in quantity time
    let i = 0;
    const timer = window.setInterval(function () {
        i++;
        console.log(i);
        if (i === 10) {
            window.clearInterval(timer);
        }
    }, 1000); // time in miliseconds
})();

/*******
 * DOM * 
 *******/

const p = document.querySelectorAll('#text')[0]; // How to get tag in the DOM
p.className = 'red'; // To change tag class
p.style.fontSize = "30px"; //To add some CSS to a tag with JS
p.innerHTML = "texto de prueba cambia lo que estaba escrito";

const ps = document.querySelectorAll("p");
for (let i = 0; i < ps.length; i++) {
    (function (p) {
        window.setInterval(function () {
            p.classList.toggle("red");
        }, 1500);
    })(ps[i]);
}

// para trabajar con los diferentes elementos en html y saber como sleccionarlos
let ul = document.querySelector("ul");
console.log(ul.children);

let li = ul.querySelector("li:nth-child(6)");
console.log(li);

console.log(li.nextElementSibling);

console.log(li.parentElement);

console.log(li.parentElement.children);

li.parentElement.removeChild(li);

document.body.appendChild(li);

var li2 = document.createElement("li");
li2.textContent = "hola la penyita";
li.parentElement.appendChild(li2);

// To replace elements
li.parentElement.replaceChild(li2, li);

// TO change un element by unother 
let last = document.querySelector("ul").lastElementChild;
li.parentElement.insertBefore(last, li2);

/******************
 * Les évènements * 
 ******************/

let text = document.querySelectorAll("p");
let list = document.querySelectorAll("li");
let btn = document.querySelector("#btn");
let link = document.querySelector("#external");
let sbtn = document.querySelector(".spoiler button");

text.forEach(p => {
    btn.addEventListener("click", () => {
        p.classList.toggle("red");
    });
});

list.forEach(li => {
    li.addEventListener("mouseover", () => {
        this.classList.add("blue");
    });

    li.addEventListener("mouseout", () => {
        this.classList.remove("blue");
    });
});

link.addEventListener("click", (event) => { //e equal to evenement in this case 'click'
    event.stopPropagation(); //Stop start events related of tag parents
    let reponse = window.confirm("Quiere, realmente salir de esta pagina?");
    if (reponse === false) {
        event.preventDefault(); //Stop default behavior 
    }
});

document.querySelector("#input").addEventListener("keydown", (e) => {
    let lettre = String.fromCharCode(e.keyCode); // evenment keyCode function deprecated 
    if (lettre != "A") {
        e.preventDefault();
    }
});

let cp = document.querySelector("#cp");
cp.focus(); //To focus when enter in page
document.querySelector("#form").addEventListener("submit", (e) => {
    let cp = document.querySelector("#cp");
    if (cp.value.length != 5) {
        alert("Le code postal n'est pas bon");
        e.preventDefault();
    }
    let mention = document.querySelector("#mention").checked; //To get if checkbox its checked
    if (!mention) {
        alert("debe acceptar las condisiones legales");
        e.preventDefault();
    }

    //Get the options from select input and transform in int
    let age = parseInt(
        document.querySelector("#age").selectedOptions[0].value,
        10
    );
    if (age < 18) {
        alert("Nooooo puedeessss passaarr");
        e.preventDefault();
    }
});

/******************
 * Sopiler system * 
 ******************/

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