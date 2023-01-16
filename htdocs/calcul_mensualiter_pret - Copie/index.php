<!DOCTYPE html>
<html lang="FR-fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"> 
   <title>Methode de calcul d'une mensualité d'un prêt</title>
</head>
<body>

<?php

require "finance.php";
if(isset($_POST["validation"]))
{
   $monobjpret= new Pret($_POST["capital"],$_POST["duree"],$_POST["taux_interet"]);
   $mensualité_dossier = $monobjpret->calculMensualite();
   echo $mensualité_dossier;
    echo " €";
}


?>
<?php
require "finance.php";
if(isset($_POST["table"]))
{
 $monobjpret = new Pret($_POST["Numero de mois"],$_POST["part intérêt"],$_POST["Part amortissement"],$_POST["Capital restant dû"],$_POST["mensualité"]);
 $monobjpret->creerTabAmortissement();
 echo creerTabAmortissement();
}
 
?>


    <form action="index.php" method="POST"  >Simulation de prêt <br><br>

    <fieldset id="fieldset"><legend id="legend">calcul d'une mensualité d'un prêt </legend>

        <label for="Capital emprunté">Capital emprunté :
            <input type="text" name="capital" class="input" id="capital" placeHolder="Capital emprunté"> 
        </label>

        <label for="taux intérêt">Taux intérêt en % :
            <input type="text" name="taux_interet" class="input" id="taux_interet" placeHolder="Taux intérêt"> 

         <label for="">Durée de remboursement en nb d'année :
            <input type="text" name="duree" class="input" id="duree"placeHolder="Durée"> 
        </label>

        

        <label for="mensualité">Mensualité :
             <input type="text" name="mensualite" class="input" id="mensualite" placeHolder="Mensualité" readonly="readonly" value="<?php if(isset($_POST["validation"]))
{echo $mensualité_dossier;}?>"><br><br>
        </label>

        <input type="submit" value="valider" name="validation" id="validation">


    </fieldset>
    </form>
  
    <br><br>
    
 
  
      
                
            </tbody>           
    </table>
</body>
</html>