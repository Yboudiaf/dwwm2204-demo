//////////////////////////////////////////
///Methode xmlhttprequest instanciation de la requete "open()" et "send()"" envoie la requête au serveur. 

//////////////////////////////////////////
let donnees= [];
let monxhr = new XMLHttpRequest();

monxhr.open('GET','https://arfp.github.io/tp/web/frontend/cardgame/cardgame.json',true);

monxhr.responseType = "json";

monxhr.send();

monxhr.onload = function ()
{
  if (monxhr.status==200) 
  {
   
    donnees = monxhr.response;
    create_THead(donnees);
    create_Body(donnees);
    create_Legende();
    console.log(donnees);
/////////////////////////////////// 
    puissance_armure_max(donnees);
    puissance_attaque_max(donnees);
    
    console.log(donnees);


  }
  else
  {
    console.log("erreur : "+ monxhr.status + monxhr.statusText);
  }
}

///////////////creation tableau jeux/////////////
 const tab = document.querySelector("#jeux");
///////////////////////////////////////////////
/////////////////////////////////////////////////

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
function  plus_de_parties_jouer(data)
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
   
return keyMax;

}
///////////////////////////////////////////
////////////////////////////////////////
function  plus_de_parties_gagner(data)
{
 let valeur_max_parti_gagner = data[0].victory;
 let keyMax = 0;

 for (let i = 1; i < data.length; i++)
    {

  if(data[i].victory > valeur_max_parti_gagner )
      {
        valeur_max_parti_gagner = data [i].victory;

    keyMax = i;

      }
      
    }
   
return keyMax;

}
//////////////////////////////////////////////////
/////////////////////////////////////////////////

function puissance_attaque_max(data)
{
  let Valeur_Max_attack = data[0].attack;  /////ont defini la carte "Valeur_Max" à la position 0 du tableau data et ont recupere sa valeur "puissance_attaque"
  let keyMax = 0; ////////Definie la "keyMax" à la carte max

  for(let i=1; i < data.length; i++)////ont parcour le tableau en commenceant par l'indince 1
     { 
      if(data[i].attack > Valeur_Max_attack){ /////si le tableau "data" à la position [i] avec sa valeur est plus grande que "Valeur_Max"  

        Valeur_Max_attack = data[i].attack;///// Alors "Valeur_Max" deviens [1] du tableau "data" et prend donc sa valeur "puissance_attaque"

          keyMax = i;
      } 
     
  
     
     }
       return keyMax;
   
 } 
///////////////////////////////////////////////////////
//////////////////////////////////////////////////////
function puissance_armure_max(data)
{
let valeur_max_armure = data[0].armor;
let keyMax = 0;

for(let i=1; i<data.length; i++)////ont parcour le tableau en commenceant par l'indince 1
{
  if(data[i].armor < valeur_max_armure){ /////si le tableau "data" à la position [i] avec sa valeur est plus grande que "carte_max_armure"  

    valeur_max_armure = data[i].armor;///// Alors "Valeur_Max" deviens [1] du tableau "data" et prend donc sa valeur "max_armure"

      keyMax = i;
  }
  
}
return keyMax;
}
///////////////////////////////////////////////////////
//////////////////////////////////////////////////////

/////////////////////////////////////////////////////
/////////////boutton played
/////////////////////////////////////////////////////
document.getElementById("btn_played").addEventListener("click",function()
{
  let indice_played= plus_de_parties_jouer(donnees);
  console.log(donnees[indice_played].name); 

  document.getElementById("player_name").innerHTML = donnees[indice_played].id
  document.getElementById("player_name").innerHTML = donnees[indice_played].name
  document.getElementById("player_name").innerHTML = donnees[indice_played].attack
  document.getElementById("player_name").innerHTML = donnees[indice_played].victory
  document.getElementById("player_name").innerHTML = donnees[indice_played].played
  document.getElementById("player_name").innerHTML = donnees[indice_played].armor

}
)
/////////////////////////////////////////////////////
/////////////boutton victories
/////////////////////////////////////////////////////
document.getElementById("btn_victory").addEventListener("click",function()
{
 
  let indice_victory= plus_de_parties_gagner(donnees);
  console.log(donnees[indice_victory].name); 

  document.getElementById("Victory").innerHTML = donnees[indice_victory].id
  document.getElementById("Victory").innerHTML = donnees[indice_victory].name
  document.getElementById("Victory").innerHTML = donnees[indice_victory].attack
  document.getElementById("Victory").innerHTML = donnees[indice_victory].victory
  document.getElementById("Victory").innerHTML = donnees[indice_victory].played
  document.getElementById("Victory").innerHTML = donnees[indice_victory].armor
 

}
)
/////////////////////////////////////////////////////
//////////////boutton damage
/////////////////////////////////////////////////////
document.getElementById("btn_damage").addEventListener("click",function()
{
 
  let indice_damage= puissance_armure_max(donnees);
  console.log(donnees[indice_damage].name); 
  
  document.getElementById("Defense").innerHTML = donnees[indice_damage].id
  document.getElementById("Defense").innerHTML = donnees[indice_damage].name
  document.getElementById("Defense").innerHTML = donnees[indice_damage].attack
  document.getElementById("Defense").innerHTML = donnees[indice_damage].victory
  document.getElementById("Defense").innerHTML = donnees[indice_damage].played
  document.getElementById("Defense").innerHTML = donnees[indice_damage].armor
}
)
/////////////////////////////////////////////////////
//////////////boutton attaque
/////////////////////////////////////////////////////

document.getElementById("btn_attack").addEventListener("click",function()
{
  let indice_attack= puissance_attaque_max(donnees);
  console.log(donnees[indice_attack].name);  

  document.getElementById("Attack").innerHTML = donnees[indice_attack].id
  document.getElementById("Attack").innerHTML = donnees[indice_attack].name
  document.getElementById("Attack").innerHTML = donnees[indice_attack].attack
  document.getElementById("Attack").innerHTML = donnees[indice_attack].victory
  document.getElementById("Attack").innerHTML = donnees[indice_attack].played
  document.getElementById("Attack").innerHTML = donnees[indice_attack].armor

}
)





















































































