<!DOCTYPE html>
<html lang="FR-fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Methode de calcul d'une mensualité d'un prêt</title>
</head>
<body>

<?php

require "./finance.php";
if(isset($_POST["validation"]))
{
   $monobjpret= new Pret($_POST["capital"],$_POST["duree"],$_POST["taux_interet"]);
   echo $monobjpret->calculMensualite();
    
}

?>


    <form action="index.php" method="POST"  >Simulation de prêt <br><br><br><br>

    <fieldset id="fieldset"><legend id="legend">calcul d'une mensualité d'un prêt </legend>

        <label for="Capital emprunté">Capital emprunté :
            <input type="text" name="capital" class="input" id="capital" placeHolder="Capital emprunté"> <br><br>
        </label>

        <label for="taux intérêt">Taux intérêt en % :
            <input type="text" name="taux_interet" class="input" id="taux_interet" placeHolder="Taux intérêt"> <br><br>
         </label>

         <label for="">Durée de remboursement en nb d'année :
            <input type="text" name="duree" class="input" id="duree"placeHolder="Durée"> <br><br>
        </label>

         <input type="submit" value="valider" name="validation" id="validation">

        <label for="mensualité">Mensualité :
             <input type="text" name="mensualite" class="input" id="mensualite" placeHolder="Mensualité"><br><br>
        </label>

        <label for="">Tableau de rembouresements(d'amortissements)du prêt <br>
            <textarea name="zone_saisie" id="zone_saisie" placeHolder="zone texte" cols="40" rows="10"> </textarea>

            

        </label>

   

    </fieldset>
    </form>
</body>
</html>