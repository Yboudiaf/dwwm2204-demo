function recupereCookie(nomCookie)
{
    
  // let decodedCookie = decodeURIComponent(document.cookie);
    let currentCookie = document.cookie.split("; ");
    console.log(currentCookie);
    let trouver = false;

    for (let index = 0; index < currentCookie.length; index++) {

     getCookie = currentCookie[index].split("=");
       // let c =  cookieDecoder[index];
       // while (c.charAt(0)==' '){
           // c = c.substring(1); 
           if(getCookie[0] == nomCookie){

            trouver = true;
            return getCookie[1];

        }

        }

       if(trouver == false){

        return "Cookie non trouver";
       }
        
    }console.log(recupereCookie("nomCookie"));

    