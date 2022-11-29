let monxhr = new XMLHttpRequest();
monxhr.open('GET','https://arfp.github.io/tp/web/frontend/cardgame/cardgame.json',true);

monxhr.responseType = "json";

monxhr.send();

monxhr.onload = function ()
{
        if (monxhr.status==200) {

            let container = monxhr.response;
            createTable(container);
          //  console.log(container);
            
        }
        else
        {
            console.log("erreur : "+ monxhr.status + monxhr.statusText);
        }
}
/////////////////////////////////////////////////
/////////////////////////////////////////////////
function createCelule(maLigne , mesValeurs)
{
    let cellule = maLigne.insertCell();
    cellule.textContent = mesValeurs;
     
}



 function createTable(_data)
 { 

      let thead = document.querySelector("#jeux").createTHead();
    
       let ligneTitre = thead.insertRow();
     for (const key in _data[0]) {
        
        createCelule(ligneTitre , key );     

     }
    
 }