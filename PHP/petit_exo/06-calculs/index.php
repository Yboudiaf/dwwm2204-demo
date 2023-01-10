<?php

//////Function ajouter///////////////
function somme($valeurA,$valeurB)
{
    $resultat = $valeurA + $valeurB;
    return $resultat;
}
echo("le resultat de l'adition'est : ").somme(18,2). "<div>";

//////Function soustraction///////////////
function soustraction($valeurC,$valeurD)
{
    $resultat = $valeurC - $valeurD;
    return $resultat;
}
echo(" le resultat de la soustraction est : ").soustraction(18,2). "<div>";

////////////Function multiplication///////
function multiplication($valeurE,$valeurF)
{
    $resultat = $valeurE * $valeurF;
    return $resultat;
}
echo(" le resultat de la multiplication est : ").multiplication(18,2). "<div>";

///////////FUNCTION DIVISION/////////////
function division($valeurG,$valeurH)
{
    if ( $valeurH == 0) {

       $resultat = 0 ;
    }
    else{
        $resultat = $valeurG / $valeurH;
    }
    return number_format($resultat,2);
}
echo(" le resultat de la division est : ").division(18,10);
