<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta
     http-equiv="X-UA-Compatible" 
     content="IE=edge">

    <meta
     name="viewport" 
     content="width=device-width, initial-scale=1.0">

    <title>affichage liste restaurant </title>
     <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
        crossorigin="anonymous"> 


</head>
<body>
     
    <table class="table table-striped" >




        <tbody>
 <?php 
  

    //recupére le fichier ./metiers/connexion.php
    require "./metiers/connexion.php";

    $requete = "SELECT *  FROM restaurants";

   $maconnexion= Connexion::getInstance();//recuperer la connexion unique 

   $pdostatement=$maconnexion->prepare($requete);//prepare mais ne l'envoie pas
   $pdostatement->execute();// execute peut prendre en compte plusieurs paramétres


   $tableNameColonne = [];//Crée un tableau 


  for ($i=0; $i < $pdostatement->columnCount() ; $i++) {    //Parcours les colonnes du tableau de la base de donnée 

    $tab = $pdostatement->getColumnMeta($i);// tab = cherche les données pour chaque colonne  
    array_push($tableNameColonne,$tab["name"]);//insert les données pour chaque colonne

  }
  var_export($tableNameColonne);




//    $meta = $select->getColumnMeta(0);
//    echo $meta["name"];
//    echo "<td>";

//    $meta = $select->getColumnMeta(1);
//    echo $meta["name"];
//    echo "<td>";

//     $meta = $select->getColumnMeta(2);
//     echo $meta["name"];
//     echo "<td>";
   
//     $meta = $select->getColumnMeta(3);
//     echo $meta["name"];
//     echo "<td>";

//    $meta = $select->getColumnMeta(4);
//    echo $meta["name"];
//    echo "<td>";
   
//     $meta = $select->getColumnMeta(5);
//       echo $meta["name"];
//       echo "<td>";
   
//     $meta = $select->getColumnMeta(6);
//     echo $meta["name"];
//     echo "<td>";


   
 

    while($ligne = $pdostatement->fetch())
    {
     echo "<tr>";// Crée des lignes 
 
     for ($i=0; $i < count($ligne); $i++) 
     { 
 
         echo "<td>".$ligne[$i]."</td>";//Crée des cellules et insert les données dedans et referme la cellules
 
     }
     echo "</tr>";// ferme les lignes
    };

echo "<tbody>";


    
    ?>
   

   

 </table>
   
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</body>
</html>