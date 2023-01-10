<?php



define('taux_inferieur', 0.09 );
define('taux_superieur', 0.14 );
define('bareme', 15000 );

function calcul_impot($revenu)
{
    if($revenu <= 15000)
    {
       $impot = taux_inferieur * $revenu;

       echo("M.BOUDIAF votre impot sur le revenu est de :".$impot." Euros");
    }
    else if($revenu > taux_superieur )
    {
       $impot = ($revenu - bareme )* taux_superieur +(bareme * taux_inferieur );

       
        echo("M.BOUDIAF votre impot sur le revenu est de :".$impot." Euros");
    }


}

echo('revenu');