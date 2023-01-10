////////////Methode fetch()///////////////////////////
var tabData = [];
  fetch("zipcodes.json")  
  .then(response => {return response.json()} )

  .then(response => {
    tabData=response;
    genererListe(response);
    rechercherParNom(tabData);
    recherche_par_cp(tabData);
  
   console.log(tabData);
   } )

  .catch(error => {console.log("Erreur : " + error)});

///////////////////////////////////////////////
///////////liste code Commune
/////////////////////////////////////////////
  function genererListe(data)
  {
    let myDataList = document.getElementById('code_commune');
    for (let i = 0; i < data.length; i++)
     {
      
      let monOption= document.createElement('option');
      monOption.value = data[i].codePostal;
      monOption.innerText = data[i].nomCommune;
      myDataList.appendChild(monOption);
    }
  }
 ///////////////////////////////////////////////
 /////Rechercher par nom de commune
/////////////////////////////////////////////
function rechercherParNom(data)
{ 
  let resultat = [];
  let valeurAchercher = (document.getElementById("commune").value).toLowerCase();
  console.log(valeurAchercher);
 
  for (let i = 0; i < data.length; i++)
   { 
    if (data[i].nomCommune.toLowerCase() === valeurAchercher )
    {
      console.log();
      resultat.push(data[i].codePostal);    
    }   
  }
  ;
let container = document.getElementById("container");
while( container.firstChild) {

  container.removeChild(container.firstChild);
}


  let mon_ul= document.createElement("ul");
 for (let j = 0; j < resultat.length; j++) 
  {
    let mon_item = document.createElement("li");
    mon_item.textContent = resultat[j];
    mon_ul.appendChild(mon_item);    
  }
  container.appendChild(mon_ul);
}
///////////////////////////////////////////////
///////////////Rechercher par code postal
/////////////////////////////////////////////
function recherche_par_cp(data)
{

  let valeurAchercher = document.getElementById("commune").value;
  console.log(valeurAchercher);
  let resultat =[];
  for (let i = 0; i < data.length; i++)
   {
    if ((data[i].codePostal) == Number(valeurAchercher))
    {
      resultat.push(data[i].nomCommune);
     
      
    } 
  }
  console.log(resultat);
  const container = document.getElementById("container");
  while( container.firstChild) {

    container.removeChild(container.firstChild);
  }
  

  let mon_ul = document.createElement("ul");

 
  for (let j = 0; j < resultat.length; j++) 
  {
    let mon_item = document.createElement("li");
    mon_item.textContent = resultat[j];
    mon_ul.appendChild(mon_item);    
  }
  container.appendChild(mon_ul);
}

document.getElementById("btnValid").addEventListener("click", function()
{
  if (isNaN(document.getElementById("commune").value)) {
  
  rechercherParNom(tabData);
}else
{
  recherche_par_cp(tabData);
}

  

})



 ////////////////////////////////////////////////////

 ////////////Novelle methode fetch() et await /////////////
//  try {
//     let response = await fetch("zipcodes.json");
//     var json = await response.json();
//     console.log(json);
//     console.log("toto");

// } catch (error) {

// }

//EVENEMENT CLICK SUR VALIDER

// const btn = document.getElementById("btnValid")
// const input = document.getElementById("toto")

// btn.addEventListener("click" , function()
// {
// console.log(input.value);
// let valeurAchercher = input.value;

// for (let i = 0; i < json.length; i++) {
//   let ville = json[i];

//   if (valeurAchercher === ville.codePostal) {

//     console.log(ville.nomCommune + " " + ville.codePostal);
    
//   }
  
// }
//   for(let ville of json)
//   {
    
//   }


// })
