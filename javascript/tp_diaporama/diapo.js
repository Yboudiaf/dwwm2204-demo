var tab = [];
  fetch("diapo.json")  
  .then(response => {return response.json()} )

  .then(response => {
    tabData=response;

    createElement(data);
  
   console.log(tabData);//Affiche les données json
   } )

  .catch(error => {console.log("Erreur : " + error)});

console.log(tab);//Affiche le tableau

//////Crée les élements dinamiquement avec createElement,avec leurs enfants grace a setAttribut
function creeElement(data)
{
    let elementdiv = document.createElement('div');
    let elementImg = elementdiv.setAttribute("class");

    console.log(elementdiv);
    console.log(elementImg);

}