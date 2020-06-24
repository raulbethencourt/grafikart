var eleve = {
    nom: 'eleve',
    age: 15,
    sex: 'varon',

    moyenne: function () {
        return 10;
    },

    present: function () {
        debugger;
        return this.nom + " presente";
    } 
};

var demo = 'salut'
console.log(demo)

var luther = {
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

var jean = Object.create(eleve);
jean.nom = "Jean";

var i = 0;
while (i < 10) {
    console.log(i);
    i++;
}

for (let i = 0; i < 10; i++) {
    console.log(i);    
}

var personas = ['raul', 'jairo', 'luicho', 'sara'];
for (let i = 0; i < personas.length; i++) {
    const persona = personas[i];
    console.log(persona);
}

var nombre = 97;
var estPremier = true;

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

var eleves =[{
    nom: 'raul',
    media: 8
}, {
    nom: 'jairo',
    media: 6
}, {
    nom: 'luicho',
    media: 4
}, {
    nom: 'sari',
    media: 2
}];

for (let i = 0; i < eleves.length; i++) {
    const eleve = eleves[i];
    if (eleve['media'] >= 5) {
        console.log(eleve['nom'] + ' maquinote');
    } else {
        console.log(eleve['nom'] + ' chiquito inutil');
    }
}

console.log(eleves[2]['nom'], eleves[1]['media']);

