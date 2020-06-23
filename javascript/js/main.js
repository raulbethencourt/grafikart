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

console.log("Silence is golden");

var jean = Object.create(eleve);
jean.nom = "Jean";