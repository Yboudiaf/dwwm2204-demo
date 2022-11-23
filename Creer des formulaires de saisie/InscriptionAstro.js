
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





//document.getElementById("Pseudo").value = valNum( document.getElementById("NomUtilisateur").value) ;//Ont appelle l'id "Pseudo" = pour lui affecter la fonction ValNum

  //  console.log( valNum( document.getElementById("NomUtilisateur").value));

///////////////////////////////////////////////////

function calculerSigne(mois_de_naissance){

       let astrologique =["Verseau", " Poisson","Belier","Taureau","Gémeaux","Cancer","Lion", //Creation du tableau astrologique  
       "Vierge","Balance","Scorpion","Sagittaire","Capricorne","Verseau"];

        let signe_astrologique = astrologique[mois_de_naissance-1];  //Signe_astrologique deviens tableau astrologique + 
                                                                      // [position de lindex pour (mois de naissance)]

                 return signe_astrologique;
       
    }
  
    
    ////////////////////////////////////////////////

function calculerPseudo(){
     

        let pseudo = calculerSigne(document.getElementById("Mois").value) + (valNum(document.getElementById("NomUtilisateur").value)+ valNum(document.getElementById("PrenomUtilisateur").value) );

        document.getElementById("Pseudo").value = pseudo;     
    }    

 function formOK(){


        if(document.getElementById("NomUtilisateur").value != ''  &&   document.getElementById("Jour").value != '' && document.getElementById("Mois").value != '' && document.getElementById("Annee").value != '' && 
        document.getElementByI("PrenomUtilisateur").value !="" )
        {
         document.getElementById("Validation").disabled = false;
        return true;
         }
        else{
        return false;
        }
}
    
    let champs_formulaire_txt = document.querySelectorAll(".txt");
    let champs_formulaire_select = document.querySelectorAll(".select");

    champs_formulaire_txt.forEach( (item)=> { item.addEventListener("blur", function() {if(formOK()==true){
        calculerPseudo();}
    } )});  
    champs_formulaire_select.forEach( (item)=> { item.addEventListener("change",function() {if(formOK()==true){
        calculerPseudo();}
    } )});

   // console.log(formOK()) ;

////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////

 function fonctionValider(){
 }
   