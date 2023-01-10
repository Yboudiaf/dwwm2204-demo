
function valNum(chaine){
    let transformeLaChaineEnMajuscule = chaine.toUpperCase();//La fonction transforme les minuscules en majuscules
    let valleurNumerique =0;

    for(let i = 0; i < transformeLaChaineEnMajuscule.length ; i++){

        let ASCII  = transformeLaChaineEnMajuscule.charCodeAt(i) ;//La fonction transforme le code ASCII du caractère en position i

        if(ASCII >= 65 && ASCII <=90 ){
            valleurNumerique += ASCII -64; 
        }
    }
    return valleurNumerique;
};

////////////////////////////////////////////
////////////////////////////////////////////
function afficherAnnee()
{
    let dateJour = new Date();
    let currentAnnee = dateJour.getFullYear();


    for (let i = currentAnnee-70; i < currentAnnee-18; i++) {
        let monOption = document.createElement('option');
        monOption.value = i;
        monOption.textContent= i;

        document.getElementById('annee').append(monOption);

        
    }

}
afficherAnnee();

/////////////////////////////////////////////
/////////////////////////////////////////////
function afficherJour()
{
    for (let i = 1; i <= 31; i++) {
     
        let monOption = document.createElement('option');
        monOption.value = i;
        monOption.textContent= (i<10)?"0"+i:i;
        
        document.getElementById('jour').appendChild(monOption);
    }


}
afficherJour();


var tabMois=
[
    "Janvier",
    "Fevrier",
    "Mars",
    "Avril",
    "Mai",
    "Juin",
    "Juillet",
    "Aôut",
    "Septembre",
    "Octobre",
    "Novembre",
    "Decembre"
]

///////////////////////////////////////////////
///////////////////////////////////////////////
function afficherMois()
{
    for (let index = 1; index <= 12; index++) 

    {

        let monOption = document.createElement('option');
        monOption.value = index;
        monOption.textContent= tabMois[index-1];
        document.getElementById('mois').appendChild(monOption);
        
    }
}
afficherMois();

///////////////////////////////////////////////////
/////////////////////////////////////////////////// 

// document.getElementById("Pseudo").value = valNum( document.getElementById("NomUtilisateur").value) ;//Ont appelle l'id "Pseudo" = pour lui affecter la fonction ValNum
//    console.log( valNum( document.getElementById("NomUtilisateur").value));


///////////////////////////////////////////////////
/////////////////////////////////////////////////// 

function calculerSigne(mois_de_naissance){

       let astrologique =["Verseau", " Poisson","Belier","Taureau","Gémeaux","Cancer","Lion", //Creation du tableau astrologique  
       "Vierge","Balance","Scorpion","Sagittaire","Capricorne","Verseau"];

        let signe_astrologique = astrologique[mois_de_naissance-1];  //Signe_astrologique deviens tableau astrologique + 
                                                                      // [position de li pour (mois de naissance)]

                 return signe_astrologique;
       
    }
    
 let champs_formulaire_txt = document.querySelectorAll("input[type=text]");
    let champs_formulaire_select = document.querySelectorAll("select");

    champs_formulaire_txt.forEach( (item)=> { item.addEventListener("blur", function() {if(formOK()==true){
        calculerPseudo();}
    } )});  


    champs_formulaire_select.forEach( (item)=> { item.addEventListener("change",function() {if(formOK()==true){
        calculerPseudo();}
    } )});


/////////////////////////////////////////////////// 
/////////////////////////////////////////////////// 
function calculerPseudo(){
     

let pseudo = calculerSigne(document.getElementById("mois").value) 
         +  
         (Number( valNum(document.getElementById("nom_utilisateur").value))   +   Number(valNum(document.getElementById("prenom_utilisateur").value)))
     
        


        document.getElementById("Pseudo").value = pseudo;  
        return pseudo;   
    }   
 
/////////////////////////////////////////////////// 
/////////////////////////////////////////////////// 

 function formOK(){

    let verifbool= false;
    if( document.getElementById("nom_utilisateur").value !="" &&  document.getElementById("prenom_utilisateur").value!=""  
    && document.getElementById("jour").value!="" && document.getElementById("mois").value!="" && document.getElementById("annee").value!=""
    )
    {

    document.getElementById('Pseudo').value = calculerPseudo();
    document.getElementById("Validation").disabled = false;
      verifbool=true; 
          
    } 
 return verifbool;
} 
   console.log(formOK()) ;

////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////

function creationCookie(nomCookie, valeurCookie)
{
    var dateExpiration = new Date();
    dateExpiration.setTime(dateExpiration.getTime() +(3600 * 1000) * 2);
    dateExpiration = dateExpiration.toGMTString();
    document.cookie = nomCookie + '=' + valeurCookie +';expires=' + dateExpiration + ';Samesite = strict';

}
/////////////////////////////////////////////////////////////
document.getElementById("Validation").addEventListener("click",function()
{
    
    let monjour= (document.getElementById("jour").value<10 )? '0'+ document.getElementById("jour").value : document.getElementById("jour").value;
    let monmois=(document.getElementById("mois").value<10)?'0'+document.getElementById("mois").value:document.getElementById("mois").value;
    let dateAnniversaire =monjour + '/' +  monmois+'/' + document.getElementById("annee").value;

    creationCookie("annee", document.getElementById("annee").value);
    creationCookie("nom_utilisateur", document.getElementById("nom_utilisateur").value);
    creationCookie("prenom_utilisateur", document.getElementById("prenom_utilisateur").value);   
    creationCookie("dateAnniversaire",dateAnniversaire);
    creationCookie("Pseudo",document.querySelector("#Pseudo").value);
    document.forms[0].submit();

})
//////////////////////////////////////////////////////
/////////////////////////////////////////////////////