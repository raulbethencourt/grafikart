let eleve = {
    nom: 'eleve',
    age: 15,
    sex: 'leton',

    moyenne: function () {
        return 10;
    },

    present: function () {
        //debugger;
        return this.nom + " presente";
    }
};

let demo = 'salut'
console.log(demo)

let luther = {
    nom: 'Luther',
    age: 14,
    moyenne: 15
}

if (luther['age'] > 16 || luther['age'] === null) {
    console.log('tu es majeur !');
} else if (luther['age'] > 14 && luther['age'] <= 16) {
    console.log('ya casi estas');
} else {
    console.log('esperarte !');
}

switch (luther['age']) {
    case 18:
        console.log('bravo tienes 18 anyos');
        break;
    case 25:
        console.log('bravo, tienes un cuarto de siglo');
        break;
    case 50:
        console.log('bravo, tienes medio siglo');
        break;
    default:
        break;
}


console.log(luther['age'] >= 18 ? 'eres mayor de edad' : 'eres menor de edad');

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

let personas = ['raul', 'jairo', 'luicho', 'sara'];
for (let i = 0; i < personas.length; i++) {
    let persona = personas[i];
    console.log(persona);
}

let nombre = 97;
let estPremier = true;

for (let i = 2; i < nombre; i++) {
    if (nombre % i === 0) {
        estPremier = false;
        console.log('este numero no es par');
        console.log(nombre + ' es divisible por ' + i);
        break;
    }
}
if (estPremier) {
    console.log(nombre + ' es par');
}

let eleves = [{
    nom: 'raul',
    media: 8
}, {
    nom: 'jairo',
    media: 6
}, {
    nom: 'luicho',
    media: 7
}, {
    nom: 'sari',
    media: 2
}];

for (let i = 0; i < eleves.length; i++) {
    let eleve = eleves[i];
    if (eleve['media'] >= 5) {
        console.log(eleve['nom'] + ' maquinote');
    } else {
        console.log(eleve['nom'] + ' chiquito inutil');
    }
}

console.log(eleves[2]['nom'], eleves[1]['media']);


function pair(nombre) {
    for (let i = 2; i < nombre; i++) {
        if (nombre % i === 0) {
            return false;
        }
    }
    return true;
}

if (pair(1)) {
    console.log('es impar');
} else {
    console.log('es par');
}

let media = function (eleves) {
    for (let i = 0; i < eleves.length; i++) {
        let eleve = eleves[i];
        if (eleve['media'] >= 5) {
            console.log(eleve['nom'] + ' maquinote');
        }
    }
}

media(eleves);

let lamedia = function (eleves) {
    let media = [];

    for (let i = 0; i < eleves.length; i++) {
        let eleve = eleves[i];
        if (eleve['media'] >= 5) {
            media.push(eleve['nom']);
        }
    }
    return media;
}

console.log(lamedia(eleves));

let phrase = 'There are many letiations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text.All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable.The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non - characteristic words etc.';

let frequence = function(phrase) {
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
    nom: 'Jean',
    notes: [15, 16, 18, 2]
}
let eleve2 = {
    nom: 'Marc',
    notes: [5, 18, 20, 19]
}

let moyenne = function(notes) {
    let somme = 0;
    for (let i = 0; i < notes.length; i++) {
        somme = somme + notes[i];        
    }
    return somme / notes.length;
}

let estMeilleur = function(a, b) {
    return moyenne(a['notes']) > moyenne(b['notes']);
}
console.log(estMeilleur(eleve1,eleve2));



const alumno = {
    nom: 'Jean',
    present: function () {
        let self = this;
        let demo = {
            demo: function () {
                console.log(self.nom);
            }
        }
        demo.demo();
        console.log(self['nom'] + " présent");
    }
}
alumno.present();

const estudiante = {
    media() {
        let somme = 0;
        let notes = this['notes'];
        for (let i = 0; i < notes.length; i++) {
            somme = somme + notes[i];        
        }
        return somme / notes.length;
    },
    present() {
        console.log(this['nom'] + " présent");
    }
}
const raul = {
    nom: 'Raul',
    notes: [20, 20, 15]
}
const jairo = {
    nom: 'Jairo',
    notes: [15, 13, 12]
}
raul.__proto__ = estudiante;
jairo.__proto__ = estudiante;


console.log(raul.media());
console.log(jairo.present());

const Trabajador = function (nom, notes) {
    this.nom = nom;
    this.notes = notes;
}

Trabajador.prototype.media = function () {
    let somme = 0;
    notes = this.notes;
    for (let i = 0; i < this.notes.length; i++) {
        somme = somme + notes[i];        
    }
    return somme / notes.length;
}

const sara = new Trabajador('Sara', [20, 16, 13]);
const luicho = new Trabajador('Luicho', [14, 16, 12]);

let a = {}

try {
    a.maMethode();  
} catch (e) {
    console.log("J'ai rencontré une erreur " + e);
} finally {
    console.log('finally');
}

console.log('salut');

(function () {

    window.alert('Salut les gens');
    
    let demo = window.prompt('entra tu respuesta');
    console.log(demo);

    let test = window.confirm('El universo se destruye poco a poco');
    console.log(test);

})();

(function () {

    let numero = window.prompt('Elige un numero entre 1 y 10');
    let deviner = Math.round(Math.random() * 10);
    while (numero != deviner) {
        console.log(numero);
        if (numero < 1 || numero > 10) {
            numero = window.prompt('Ese numero no es entre 1 y 10. Elige un numero entre 1 y 10');
        } else if (numero < deviner && numero > 1) {
            numero = window.prompt('Mas arriba. Elige un numero entre 1 y 10');  
        } else {
            numero = window.prompt('Mas abajo. Elige un numero entre 1 y 10');
        }
    }
    window.alert('bravo, acertaste');    


    var i = 0;
    let timer = window.setInterval(function () {
        i++;
        console.log(i);
        if (i === 10) {
            window.clearInterval(timer);
        }
    }, 1000);    
    
})();