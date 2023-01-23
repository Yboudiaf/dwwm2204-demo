<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>affichage liste restaurant </title>
</head>
<body>
    <?php 


    require "./metiers/connexion.php";

    $rq = "SELECT *  FROM restaurants";

   $maconnexion= Connexion::getInstance();

   $pdostatement=$maconnexion->query($rq);

   $resultat= $pdostatement->fetchAll();
   var_export($resultat);
          


    ?>
</body>
</html>