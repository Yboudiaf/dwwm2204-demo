let monxhr = new XMLHttpRequest();
monxhr.open('GET','https://arfp.github.io/tp/web/frontend/cardgame/cardgame.json',true);

monxhr.responseType = "json";

monxhr.send();

monxhr.onload = function ()
{
  if (monxhr.status==200) {
    let container = monxhr.response;
    create_Table(container);
    create_Legende();
    console.log(container);
  }
  else
  {
    console.log("erreur : "+ monxhr.status + monxhr.statusText);
  }
}
/////////////////////////////////////////////////
/////////////////////////////////////////////////
function create_Cellule(maLigne , mesValeurs)
{
  let cellule = maLigne.insertCell();
  cellule.textContent = mesValeurs; 
}
function create_Title_Cellule(maLigne , mesValeurs)
{
  let cellule = document.createElement("th");
  cellule.textContent = mesValeurs;
  maLigne.append(cellule); 
}
/////////////////////////////////////////////////
/////////////////////////////////////////////////
function create_Table(_data)
{ 
  let enTete = document.querySelector("#jeux");
  let ligneTete = enTete.createTHead();
  let ligneTitre = ligneTete.insertRow();
  
  for (const key in _data[0]) {    
    create_Title_Cellule(ligneTitre , key );     
  }

  let myBody= enTete.createTBody();

  for (let index = 0; index < _data.length; index++) {
    const ligneBody = myBody.insertRow();
    
  for (const key in _data[1]) {    
    createTBody(ligneTitre , key  );     
  }
  }
}
 ////////////////////////////////////////////////
 ////////////////////////////////////////////////
function create_Legende()
{
  let legende = document.querySelector("#jeux");
  let addLegende = legende.createCaption();
  addLegende.textContent = 'BDJ';
}
/////////////////////////////////////////////////////
/////////////////////////////////////////////////////


