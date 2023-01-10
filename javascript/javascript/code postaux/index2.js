class CodePostaux
{
    constructor()
    {
        this.url="zipcodes.json";
        this.json = [];
        this.resultat = [];
    }
    ///////////////////////////////////////
    async telechargerjson()
    {
        let response = await fetch(this.url);
        this.json = await response.json();
        console.log(this.json);
    }
    ////////////////////////////////////////
    rechercherParCodePostal(valeurAchercher)
    {
    console.log(input.value);
    let valeurAchercher = input.value;

    for (let i = 0; i <this.json.length;i++) 
    {
    let ville = this.json[i];

    if (valeurAchercher === ville.codePostal)
     {

    console.log(ville.nomCommune + " " + ville.codePostal);
    
    }
  
    }
    }
    /////////////////////////////////////////
    rechercherParNom()
    {

    }
}// Fin de classe
    //////////////////////////////////////////
let monObjet = new CodePostaux();

await monObjet.telechargerjson();

const btn = document.getElementById("btnValid");
const input = document.getElementById("toto");
    ///////////////////////////////////////////

btn.addEventListener("cick", function()
{
    monObjet.rechercherParCodePostal(input.value);
}
);

