
////////////Methode fetch()///////////////////////////

//   fetch("https://www.une-url.com")
//  .then(response => {return response.json()} )
//  .then(response => {console.log((response))} )

//  .catch(error => {console.log("Erreur : " + error)});


 ////////////Novelle methode fetch() et await ///////////////////////////
 try {
      let response = await fetch("zipcodes.json");
      var json = await response.json();
      console.log(json);
      console.log("toto");

 } catch (error) {
  
 }

 //EVENEMENT CLICK SUR VALIDER

const btn = document.getElementById("btnValid")
const input = document.getElementById("toto")

 btn.addEventListener("click" , function()
 {
  console.log(input.value);
  let valeurAchercher = input.value;

  for (let i = 0; i < json.length; i++) {
    let ville = json[i];

    if (valeurAchercher === ville.codePostal) {

      console.log(ville.nomCommune + " " + ville.codePostal);
      
    }
    
  }
    for(let ville of json)
    {

    }


 })