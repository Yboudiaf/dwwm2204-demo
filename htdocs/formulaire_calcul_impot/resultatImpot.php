<?php


define('taux_inferieur', 0.09 );
define('taux_superieur', 0.14 );

$tabtaux=[15000,30000,70000 ];
  // $revenu = DOMDocument::getElementByid("revenu");
  //$nom = DOMDocument::getElementByTagName("nom");


function calcul_impot(float $_revenu, array $_tabtaux): float
{


    if($_revenu <= 15000 )
    {

        $impot1=taux_inferieur * $_revenu;
       $impot = round($impot1,2,PHP_ROUND_HALF_UP);

       echo "test";
   
    }
    else
    {
       $impot1 =  ($_revenu - $_tabtaux[0] ) * taux_superieur + ($_tabtaux[0] * taux_inferieur  );

       $impot = round($impot1,2,PHP_ROUND_HALF_UP);

      
    }
    return $impot;

}


?>
<!DOCTYPE html>
<html lang="FR-fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

if (isset($_GET["validation"]) && !empty($_GET["revenu"]) && !empty($_GET["nom"])) {

    $res= calcul_impot($_GET["revenu"], $tabtaux);
    echo "<p> bonojur M. : ".$_GET["nom"]." votre impôt sur le revenu sera de  : " .$res." €</p>";
}
?>
<form action="resultatImpot.php " method="GET"  >
    <caption>Impot </caption>
        <input type="text" name="nom"   placeholder="Votre nom" id="nom"/>
        <input type="text" name="revenu"  placeholder=" votre revenu net annuel" id="revenu" />
        <input type="submit" value="ok" name="validation" />
   
    
</form>


</body>
</html>
