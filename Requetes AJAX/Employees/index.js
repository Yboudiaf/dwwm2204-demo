// try {
//     let response = await fetch("employees.json");
//     var json = await response.json();
//     console.log(json);
//   

// } catch (error) {

// }
const data = [] ;

fetch("employees.json")
 .then(response => {return response.json()} )
 .then(response => {console.log((response))} )

 .catch(error => {console.log("Erreur : " + error)});

 const tab = document.querySelector("#tableau_employees");






 /////////////////////////////////////////////////
 //////////Creation ligne et cellule ID
 /////////////////////////////////////////////////
 function create_EID(data)
 {
  let EID = document.querySelector("#corp");

   for (let i = 0; i < data.length; i++)

       {
        let nouvelle_ligne = EID.insertRow(i);
        
         for (const key in data[i])
            {
            let nouvelle_cellule = nouvelle_ligne.insertCell();

             nouvelle_cellule.textContent = data[i][key];  

            }
     }
 }create_EID(data)
 /////////////////////////////////////////////////
 //////////Creation ligne et cellule Nom et Prenom
 /////////////////////////////////////////////////

 function create_full_name(data)
 {
  let fullName = document.querySelector("#Full_Name");

  for(let i = 0; i < data.length; i ++)
  {
    let nouvelle_ligne = fullName.insertRow(i);

    for(const key in data[i])
    {
      let nouvelle_cellule = nouvelle_ligne.insertCell();

      nouvelle_cellule.textContent = data[i][key];
    }
  }
 }create_full_name(data)
 /////////////////////////////////////////////////
 //////////Creation ligne et cellule Email
 /////////////////////////////////////////////////
 function create_Email(data)
 {
  let Email = document.querySelector("#Email");

  for(let i = 0; i < data.length; i ++)
  {
    let nouvelle_ligne = Email.insertRow(i);

    for(const key in data[i])
    {
      let nouvelle_cellule = nouvelle_ligne.insertCell();

      nouvelle_cellule.textContent = data[i][key];
    }
  }
 }create_Email(data)
 /////////////////////////////////////////////////
 //////////Creation ligne et cellule salaire mensuel
 /////////////////////////////////////////////////
 function create_monthly_salary(data)
 {
  let Monthly_salary = document.querySelector("#Monthly_salary");

  for(let i = 0; i < data.length; i ++)
  {
    let nouvelle_ligne = Monthly_salary.insertRow(i);

    for(const key in data[i])
    {
      let nouvelle_cellule = nouvelle_ligne.insertCell();

      nouvelle_cellule.textContent = data[i][key];
    }
  }
 }create_monthly_salary(data)
  /////////////////////////////////////////////////
 //////////Creation ligne et cellule Date anniversaire
 /////////////////////////////////////////////////
 function create_year_of_birth(data)
 {
  let Year_of_birth = document.querySelector("#Year_of_birth");

  for(let i = 0; i < data.length; i ++)
  {
    let nouvelle_ligne = Year_of_birth.insertRow(i);

    for(const key in data[i])
    {
      let nouvelle_cellule = nouvelle_ligne.insertCell();

      nouvelle_cellule.textContent = data[i][key];
    }
  }
 }create_year_of_birth(data)

 document.getElementById("btn_primary").addEventListener("click",function()
 {
   Document.getElementById(create_year_of_birth(data).EID)
 }
 )