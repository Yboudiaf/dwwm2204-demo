<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>affichage liste restaurant </title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"> ;

</head>
<body>
    
    <table class="table table-striped" >
        <tbody>

    <?php 

    //recupeére le fichier ./metiers/connexion.php
    require "./metiers ou modéle/connexion.php";

    $rq = "SELECT *  FROM restaurants";

   $maconnexion= Connexion::getInstance();//recuperer la connexion unique 

   $pdostatement=$maconnexion->prepare($rq);//prepare mais ne l'envoie pas

   $pdostatement->execute();// execute peut prendre en compte plusieurs paramétres

   while($ligne = $pdostatement->fetch())
   {
    echo "<tr>";// Crée des lignes 

    for ($i=0; $i < count($ligne); $i++) { 

        echo "<td>".$ligne[$i]."</td>";//Crée des cellules et insert les donées dedans et referme la cellules

    }
    echo "</tr>";// ferme les lignes
   };

   

   $select = $maconnexion->query('SELECT * FROM restaurants');
   $meta = $select->getColumnMeta(0);
   echo $meta["name"];
   echo "<tr>";

   $meta = $select->getColumnMeta(1);
   echo $meta["name"];
   echo "<tr>";

    $meta = $select->getColumnMeta(2);
    echo $meta["name"];
    echo "<tr>";
   
    $meta = $select->getColumnMeta(3);
    echo $meta["name"];
    echo "<tr>";

   $meta = $select->getColumnMeta(4);
   echo $meta["name"];
   echo "<tr>";
   
    $meta = $select->getColumnMeta(5);
      echo $meta["name"];
      echo "<tr>";
   
    $meta = $select->getColumnMeta(6);
    echo $meta["name"];
    echo "<tr>";
   


   while($ligne = $pdostatement->fetch())
   {
    echo "<tr>";// Crée des lignes 

    for ($i=0; $i < count($ligne); $i++) { 

        echo "<td>".$ligne[$i]."</td>";//Crée des cellules et insert les donées dedans et referme la cellules

    }
    echo "</tr>";// ferme les lignes
   
   };
          
    ?>
    </tbody>

   

 </table>
   
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</body>
</html>