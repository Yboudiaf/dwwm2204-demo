
///////////////////////////////////////
//////////////////////////////////////
function recupereCookie(nomCookie)
{ 
  // let decodedCookie = decodeURIComponent(document.cookie);
    let currentCookie = document.cookie.split("; ");
    console.log(currentCookie);
    let trouver = false;

    for (let index = 0; index < currentCookie.length; index++) {

      let getCookie = currentCookie[index].split("=");
       // let c =  cookieDecoder[index];
       // while (c.charAt(0)==' '){
           // c = c.substring(1); 
           if(getCookie[0] == nomCookie){

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

 document.querySelector('#modulo').innerHTML = recupereCookie("Pseudo");
 console.log(recupereCookie("Pseudo"));

 document.getElementById("dateAnniversaire").textContent = recupereCookie("dateAnniversaire");
 document.getElementById("nom_utilisateur").textContent = recupereCookie("nom_utilisateur");






    