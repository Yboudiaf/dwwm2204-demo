
let data = [] ;

fetch("employees.json")
 .then(response => {return response.json()} )
 .then(response => {
  
  data= response;
console.log(data)

   create_EID(data);
   console.log(data);

   create_full_name(data);
   console.log(data);

   create_Email(data);
   console.log(data);

   create_monthly_salary(data);
   console.log(data);

  create_year_of_birth(data);
  console.log(data);
} )

 .catch(error =>{console.log("Erreur : " + error)});

/////////////////////////////////////////////////
////////////////////creation tableau /////////////////////////////
/////////////////////////////////////////////////
let tab = document.querySelector("#tableau_employees");
///////////////////////////////////////////////////
////////////Creation ligne et cellule ID
///////////////////////////////////////////////////
 function create_EID(data)
 {
  let tBody = document.querySelector("#corp");

   for (let i = 0; i < data.length; i++)
       {
       let nouvelle_ligne = tBody.insertRow(i);
       
       console.log(nouvelle_ligne);
        
         for (const key in data[i])
            {
            let nouvelle_cellule = nouvelle_ligne.insertCell(i);

             nouvelle_cellule.innerText = data[i][key];  

            }
     }
 }
 
///////////////////////////////////////////////////
////////////Creation ligne et cellule Nom et Prenom
///////////////////////////////////////////////////

 function create_full_name(data)
 {
  let fullName = document.querySelector("#Full_Name");

  for(let i = 0; i < data.length; i ++)
  {
    let nouvelle_ligne = fullName.insertRow(i);

    for(const key in data[i])
    {
      let nouvelle_cellule = nouvelle_ligne.insertCell()

      nouvelle_cellule.innerText = data[i][key];
    }
  }
 }
///////////////////////////////////////////////////
////////////Creation ligne et cellule Email
///////////////////////////////////////////////////
 function create_Email(data)
 {
  let Email = document.querySelector("#Email");

  for(let i = 0; i < data.length; i ++)
  {
    let nouvelle_ligne = Email.insertRow(i);

    for(const key in data[i])
    {
      let nouvelle_cellule = nouvelle_ligne.insertCell().create_Email;

      nouvelle_cellule.textContent = data[i][key];
    }
  }
 }
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
      let nouvelle_cellule = nouvelle_ligne.insertCell().create_monthly_salary;

      nouvelle_cellule.textContent = data[i][key];
    }
  }
 }
///////////////////////////////////////////////////
////////////Creation ligne et cellule Date anniversaire
///////////////////////////////////////////////////
 function create_year_of_birth(data)
 {
  let Year_of_birth = document.querySelector("#Year_of_birth");

  for(let i = 0; i < data.length; i ++)
  {
    let nouvelle_ligne = Year_of_birth.insertRow(i);

    for(const key in data[i])
    {
      let nouvelle_cellule = nouvelle_ligne.insertCell().create_year_of_birth;

      nouvelle_cellule.textContent = data[i][key];
    }
  }
}
