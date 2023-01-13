<!DOCTYPE html>
<html lang="FR-fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">    <title>Methode de calcul d'une mensualité d'un prêt</title>
</head>
<body>

<?php

require "./finance.php";
if(isset($_POST["validation"]))
{
   $monobjpret= new Pret($_POST["capital"],$_POST["duree"],$_POST["taux_interet"]);
   $mensualité_dossier = $monobjpret->calculMensualite();
   echo $mensualité_dossier;
    echo " €";
}

?>


    <form action="index.php" method="POST"  >Simulation de prêt <br><br>

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
             <input type="text" name="mensualite" class="input" id="mensualite" placeHolder="Mensualité" readonly="readonly" value="<?php if(isset($_POST["validation"]))
{echo $mensualité_dossier;}?>"><br><br>
        </label>

        <label for="">Tableau de rembouresements(d'amortissements)du prêt <br>
            <textarea name="zone_saisie" id="zone_saisie" placeHolder="zone texte" cols="40" rows="10"> </textarea>
        </label>
    </fieldset>
    </form>
    <br><br>

    <table class="table table-success table-striped" id="table" name="table" width="60" height="50"> TABLEAU AMORTISSEMENT DU PRET: <br><br>
            <thead>
                <tr>
       
                    <th>Numero de mois</th>
                    <th>intérêt</th>
                    <th>Partie amortissement</th>
                    <th>Capital restant dû</th>  
                </tr>           
            </thead>
            <tbody>
                <tr>
                    <td>
                        1
                    </td>   
                    <td>
                        208,33
                    </td>
                    <td>
                        735,23
                    </td>
                    <td>
                        50000
                    </td>

                </tr>
                <tr>
                    <td>
                        2
                    </td>   
                    <td>
                        205,27
                    </td>
                    <td>
                        738,29
                    </td>
                    <td>
                        49264,77
                    </td>

                </tr>
                
            </tbody>           
    </table>
</body>
</html>