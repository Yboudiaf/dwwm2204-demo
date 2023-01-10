
///////////////////////////////////////
//////////////////////////////////////
function recupereCookie(nomCookie)
{ 
  // let decodedCookie = decodeURIComponent(document.cookie);
    let tabcookies = document.cookie.split("; ");
   // console.log(tabcookies);
    let trouver = false;

    for (let index = 0; index < tabcookies.length; index++)
     {

      let getCookie = tabcookies[index].split("=");     
       // let c =  cookieDecoder[index];
       // while (c.charAt(0)==' '){
           // c = c.substring(1); 
           if(getCookie[0] == nomCookie)
        {

            trouver = true;
            return getCookie[1];

        }

    }

       if(trouver == false){

        return "Cookie non trouvé";
       }
        
    }

// function getCookie(nom){

//   const cookieTab = document.cookie.split("; ");

//   for(let i=0; i<cookieTab.length; i++){

//       const cookieVal = cookieTab[i].split("=");

//       if(cookieVal[0] == nom){

//           return decodeURIComponent(cookieVal[1]);

//       }

//   }

// }
//////////////////////////////////////
//////////////////////////////////////

//  var labelCookie = document.createElement("label");
//   labelCookie.innerHTML = recupereCookie("Pseudo") + "<br>";
//   document.getElementById("modulo").appendChild(labelCookie);

//   var labelCookie1 = document.createElement("label");
//   labelCookie1.innerHTML = recupereCookie("dateAnniversaire") + "<br>";
//   document.getElementById("modulo").appendChild(labelCookie1);
 document.getElementById('nom').textContent += " "+recupereCookie('nom_utilisateur');
 document.getElementById("prenom").textContent += " " +recupereCookie("prenom_utilisateur");
 document.getElementById("age").textContent += " " +calculAge();
 document.getElementById("anniversaire").textContent += " "+ recupereCookie("dateAnniversaire");


 document.getElementById("pseudo").textContent +=" "+ recupereCookie("Pseudo");

var chaineDate = recupereCookie("dateAnniversaire");

var tabDate = chaineDate.split("/");

//////////////////////////////////////////
//////////////////////////////////////////


function calculNombreDeJour()
{
  let currentAnnee = (new Date()).getFullYear();
 let dateAnniv = new Date(currentAnnee,Number(tabDate[1])-1,tabDate[0])

 let dateJour = new Date();
 if (dateJour > dateAnniv) {

  dateAnniv = dateAnniv.setFullYear(currentAnnee +1);
  let duree = (dateAnniv - dateJour)/(24*60*60*1000);
  
  return duree.toFixed(0);
  
 }else
 {
  let duree = (dateAnniv - dateJour)/(24*60*60*1000);
  return duree.toFixed(0);
 }

 

}
console.log(calculNombreDeJour());
document.getElementById('jourAnniv').textContent += calculNombreDeJour();

//////////////////////////////////////////
//////////////////////////////////////////

function calculAge()
{
    let anneeActuelle = new Date();

    let annee = anneeActuelle.getFullYear();
    console.log(annee);

    let dateAnniv = recupereCookie("annee");
    // console.log(document.getElementById('age'))
    console.log(dateAnniv);

    for (let index = annee; annee >= dateAnniv; index++)

    {

     let nombreAnnee = (annee - dateAnniv)

    return nombreAnnee;
       
    }
   

}
console.log(calculAge());





    