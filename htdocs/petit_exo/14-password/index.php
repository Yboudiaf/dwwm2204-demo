<?php

function PasswordLength($mdp):string
{
    
        if(strlen($mdp) < 8)
        {
            echo("le mot de passe fait moins de 8 caractères");
            return true;
        }
        else
        {
            echo("le mot de passe fait plus de 8 caractères");
            return false;
        }
    
}echo (PasswordLength("yacineeeee")). "<div>";
//////////////////////////////////////
////Function verifier/////////////////
function PasswordCheck(string $mdp):bool
{

$test;
if(strlen($mdp)>=8 && preg_match('/[0-9]+/',$mdp)  &&  preg_match('/[a-z]+/', $mdp) && preg_match('/[A-Z]+/', $mdp) )
{

    // echo "here";
     $test=true;
}
else {
// echo "faux";
$test=false;
}




 return $test;

}


$mot_de_passe ="45fYv";

$monTest = PasswordCheck($mot_de_passe);
if ($monTest == false) {


   echo("Mot de passe incorrect");
}
else
{
    echo 'Mot de passe enregistré';
}
