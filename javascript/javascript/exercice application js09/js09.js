

function changeCouleur(){

chaine ="#"+document.getElementById('txtRouge').value + document.getElementById('txtVert').value + document.getElementById('txtBleu').value;

    document.body.setAttribute('style', 'background-color :'+ chaine);
};
let btnCouleurRouge = document.getElementById("btnRouge");

btnCouleurRouge.addEventListener("click", () =>{

   document.querySelector('#txtRouge').value = 'FF';
    document.querySelector('#txtVert').value = '00';
    document.querySelector('#txtBleu').value = '00';

    changeCouleur();
 
});
let btnCouleurVert = document.getElementById("btnVert");

btnCouleurVert.addEventListener("click", () =>{

   document.querySelector('#txtRouge').value = '00';
    document.querySelector('#txtVert').value = 'FF';
    document.querySelector('#txtBleu').value = '00';

    changeCouleur();
 
});
let btnCouleurBleu = document.getElementById("btnBleu");

btnCouleurBleu.addEventListener("click", () =>{

   document.querySelector('#txtRouge').value = '00';
    document.querySelector('#txtVert').value = '00';
    document.querySelector('#txtBleu').value = 'FF';

    changeCouleur();
 
});
var regex = /^[A-F][1-9]$/
function verifHexa(monChamp){
   let chaine = monChamp.toUpperCase();
   if (regex.test(chaine)==true) {

    return true;
   }
   else{
console.log("Veuillez remplir la zone avec 2 chiffres hexadecimaux: A-F et 0 - 9");

    return false;
   }
};
document.querySelector('#txtRouge').addEventListener("blur", function () {
    if (verifHexa(document.querySelector("#txtRouge").value)) {

            changeCouleur();
    }
    else{
        document.querySelector("#txtRouge").value ="";
        document.querySelector("#txtRouge").focus();

    }
 
});
document.querySelector('#txtVert').addEventListener("blur", function () {
    if (verifHexa(document.querySelector("#txtVert").value)) {

            changeCouleur();
    }
    else{
        document.querySelector("#txtVert").value ="";
        document.querySelector("#txtVert").focus();

    }
 
});
document.querySelector('#txtBleu').addEventListener("blur", function () {
    if (verifHexa(document.querySelector("#txtBleu").value)) {

            changeCouleur();
    }
    else{

        document.querySelector("#txtBleu").value ="";
        document.querySelector("#txtBleu").focus();

    }
});
var titre = document.getElementById('titre');
titre.style.color = "red";

titre.addEventListener('click' ,function (){

    document.querySelector('#titre').value ='blue';

});



