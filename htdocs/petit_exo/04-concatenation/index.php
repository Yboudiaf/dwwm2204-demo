<?php

function concatenation( $nom,$prenom)
{
    $fullName = $nom.$prenom;
    return $fullName ;
}
echo (concatenation("BOUDIAF","Yacine"));
/////////////////////////////////////////////
////////////////////////////////////////////
function concatenationEspace( $nom,$prenom)
{
    return $nom." ".$prenom;
}
echo (concatenation(" Yacine"," BOUDIAF"));