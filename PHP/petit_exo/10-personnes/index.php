<?php

function estMajeur($majeur)
{
 
    if($majeur >= 18 )
    {
        echo("Vous êtes majeur");
       return true;
    }
    else
    {
        echo("Vous êtes Mineur");
        return false;
    }
  
}
echo(estMajeur(19)). "<div>";
/////////////////////////////////////
///////////Fuction retraite //////
function calculRetraite($age)
    {
     $retraite = 60;

    if ($age <= 0)
            {
                echo("Vous n'êtes pas encore née");
            }   
        else if($age < $retraite)
             {
                $resultat = $retraite -$age;
                 echo("Il vous reste :".$resultat." ans avant la retraite");
             }
    
        else if($age > $retraite)
             {
                 $resultat = $age - $retraite;
                 echo("Vous êtes a la retraite depuis :".$resultat." ans");
             }
        else if($age == $retraite)
              {
                echo("Vous êtes aà la retraite cette année");
              }
    
    }calculRetraite(-5);

    