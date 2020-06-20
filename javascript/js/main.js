var eleve = {
    nom: 'eleve',

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