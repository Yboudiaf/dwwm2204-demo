//////////////////////////////////////////
///Methode xmlhttprequest instanciation de la requete "open()" et "send()"" envoie la requête au serveur. 

//////////////////////////////////////////
let monxhr = new XMLHttpRequest();
monxhr.open('GET','https://arfp.github.io/tp/web/frontend/cardgame/cardgame.json',true);

monxhr.responseType = "json";

monxhr.send();

monxhr.onload = function ()
{
  if (monxhr.status==200) 
  {
   
    let container = monxhr.response;
    create_THead(container);
    create_Body(container);
    create_Legende();
    console.log(container);

    
    puissance_max_armure(data);
    puissance_attaque_max(data);
    plus_de_parties_jouées(data);
    console.log(data);


  }
  else
  {
    console.log("erreur : "+ monxhr.status + monxhr.statusText);
  }
}
 const tab = document.querySelector("#jeux");
/////////////////////////////////////////////////
//////////Creation de celule
/////////////////////////////////////////////////
function create_Cellule(maLigne , mesValeurs)
 {
  let cellule = maLigne.insertCell();
  cellule.textContent = mesValeurs; 
 }

////////////////////////////////////////////////
//creation du tableau contenant les données du fichier json
////////////////////////////////////////////////

function create_Body(data)
{
 let tBody = tab.createTBody();

  for (let i=0; i<data.length; i++)
      {
        let nouvelle_ligne = tBody.insertRow(i);
        
        for (const key in data[i])
            {
            let nouvelle_cellule = nouvelle_ligne.insertCell();
            nouvelle_cellule.textContent = data[i][key];
            }
     }
}


////////////////////////////////////////////////
/// Création des en-têtes du tableau avec les index du fichier json
////////////////////////////////////////////////
 

function create_THead(data)
{
  let tHead = tab.createTHead();
  let nouvelle_ligne = tHead.insertRow();
 
  for (const key in data[0])
      {
        let nouvelle_cellule = document.createElement("th");
        nouvelle_cellule.textContent = key;
       nouvelle_ligne.appendChild(nouvelle_cellule);
      }
}
 ////////////////////////////////////////////////
 ////////////////////////////////////////////////
function create_Legende()
{
  let legende = document.querySelector("#jeux");
  let addLegende = legende.createCaption();
  addLegende.textContent = 'Jeux médiéval de cartes.';
}
/////////////////////////////////////////////////////
////////fonction cartes
/////////////////////////////////////////////////////

function puissance_attaque_max(data)
{
  let Valeur_Max_attack = data[0].attack; /////ont defini la carte "Valeur_Max" à la position 0 du tableau data et ont recupere sa valeur "puissance_attaque"
  let keyMax = 0; ////////Definie la "keyMax" à la carte max

  for(let i=1; i<data.length; i++)////ont parcour le tableau en commenceant par l'indince 1
     { 
      if(data[i].attack > Valeur_Max_attack){ /////si le tableau "data" à la position [i] avec sa valeur est plus grande que "Valeur_Max"  

        Valeur_Max_attack = data[i].attack;///// Alors "Valeur_Max" deviens [1] du tableau "data" et prend donc sa valeur "puissance_attaque"

          keyMax = i;
      }
     }
  console.log(puissance_attaque_max(data[i]));
  return keyMax;
}
///////////////////////////////////////////////////////
//////////////////////////////////////////////////////
function puissance_max_armure(data)
{
let valeur_max_armure = data[0].armor;
let keyMax = 0;

for(let i=1; i<data.length; i++)////ont parcour le tableau en commenceant par l'indince 1
{
  if(data[i].armor > valeur_max_armure){ /////si le tableau "data" à la position [i] avec sa valeur est plus grande que "carte_max_armure"  

    valeur_max_armure = data[i].armor;///// Alors "Valeur_Max" deviens [1] du tableau "data" et prend donc sa valeur "max_armure"

      keyMax = i;
  }
}

console.log(puissance_max_armure(data[i]));
return keyMax;
}
///////////////////////////////////////////////////////
//////////////////////////////////////////////////////
function  plus_de_parties_jouées(data)
{
 let valeur_max_parti_jouees = data[0].played;
 let keyMax = 0;

 for (let i = 1; i < data.length; i++)
    {

  if(data[i].played > valeur_max_parti_jouees )
    {
    valeur_max_parti_jouees = data [i].played;

    keyMax = i;

    }
 
    }
console.log(plus_de_parties_jouées(data[i]));
return keyMax;

}
function attack(data,keyMax)
{
  document.querySelector("#attackid").innerHTML = data [keyMax].id;
  document.querySelector("#attackName").innerHTML = data [keyMax].name;
  document.querySelector("#attackPlayedValue").innerText = data[maxKey].played;
  document.querySelector("#attackVictoriesValue").innerText = data[maxKey].victory;
  document.querySelector("#attackPowerValue").innerText = data[maxKey].power;
  document.querySelector("#attackAttackValue").innerText = data[maxKey].attack;
  document.querySelector("#attackArmorValue").innerText = data[maxKey].armor;
}


























































































