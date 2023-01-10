let data = [] ;
fetch("employees.json")
 .then(response => {return response.json()} )
 .then(response => {
  data= response;
   generer_Tableau(data);
  
} )
 .catch(error =>{console.log("Erreur : " + error)});
/////////////////////////////////////////////////
////////////////////Appelle le tableau /////////////////////////////
let tab = document.querySelector("#tableau_employees");
///////////////////////////////////////////////////
////////////Creation ligne et cellule ID
///////////////////////////////////////////////////
 function generer_Tableau(_data)
 {
  let tBody = document.querySelector("#tableau_employees").createTBody();
   for (let i = 0; i < _data.length; i++)
       {
/////////////////////////////////////////////////////////////////
//////////////insert une ligne pour chaque indices
       let nouvelle_ligne = tBody.insertRow(i);

/////////////////////////////////////////////////////////////////////////////
////////////////insert une cellule/////////////////////////////////////////    
        let myEID = nouvelle_ligne.insertCell();
/////////////////insert la valeur ID (myEID)///////////////////////////////////
          myEID.textContent = _data[i].id;

/////////////////////////////////////////////////////////////////////////////
/////////////////insert une cellule//////////////////////////////////////////
        let my_full_Name = nouvelle_ligne.insertCell();   
/////////////////insert la valeur ID (my_full_Name)///////////////////////////////////
        my_full_Name.textContent=_data[i].employee_name;

/////////////////////////////////////////////////////////////////////////////
//////////////////insert une cellule///////////////////////////////////////// 
         let Email = nouvelle_ligne.insertCell();
/////////////////insert la valeur ID(employee_name)///////////////////////////////////
         Email.textContent = cree_adresse_mail(_data[i].employee_name);

//////////////////insert une cellule///////////////////////////////////////////
        let monthly_salary = nouvelle_ligne.insertCell();

//////////////////insert la valeur de la fonction calcul_salaire_au_mois///////////////////////////////////////////
        monthly_salary.textContent = calcul_salaire_au_mois(_data[i].employee_salary);

////////////////////insert une cellule/////////////////////////////////////////////
        let Year_of_birth = nouvelle_ligne.insertCell();

         Year_of_birth.textContent = calcul_Annee_de_naissance(_data[i].employee_age);
////////////////////insert une cellule/////////////////////////////////////////////
        let action = nouvelle_ligne.insertCell();
        action.innerHtml= '<input type="button" id="duplicate" class="" value=""></input> <input type="button" id="Delete" class="" value=""></input>'
        //  action.textContent = _data[i];
       
 }
}
          
/////////////////////////////////////////////////////////////////
///////Email : (à calculer) Exemple pour John Doe => “j.doe@email.com”//////
/////////////////////////////////////////////////////////////////
    
function cree_adresse_mail(chaine)
{
    let mail = chaine.toLowerCase();
   let tab_identite = mail.split(" ");
   let chaine_mail = tab_identite[0].substring(0 , 1)+"."+ tab_identite[1] + "@email.com"

  return chaine_mail;  
}
/////////////////////////////////////////////////////////////
/////////////////Salaire mensuel : (à calculer)/////////////////////
/////////////////////////////////////////////////////////////
 function calcul_salaire_au_mois(_chaine_annuel)
 {
   let employee_salary = Math.round(_chaine_annuel/12) +"€";
  
   return employee_salary;
 }

/////////////////////////////////////////////////////////////
/////////////////Calcul de l'age en fonction de l'année actuel et /////////////////////
/////////////////////////////////////////////////////////////
 function calcul_Annee_de_naissance(chaine_age)
 {
  let date = new Date();
  let date_actuel = date.getFullYear();
  let employee_age = " Née : "+(date_actuel - chaine_age);

  return employee_age;


 }

