var estudiante = {
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
}
const raul = {
    nom: "Raul",
    notes: [20, 20, 15],
}
const jairo = {
    nom: "Jairo",
    notes: [15, 13, 12],
}
raul.__proto__ = estudiante;
jairo.__proto__ = estudiante;

var marion = Object.create(estudiante);
marion.notes = [18, 19, 18];
marion.nom = "Marion";

console.log(marion);
console.log(marion.media());
console.log(marion.present());
console.log(raul.media());
console.log(jairo.present());