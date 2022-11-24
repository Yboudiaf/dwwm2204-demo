<?php

do{

 echo "veuillez saisie votre prenom :";

 $prenom = readline();
if(strlen($prenom)<2){
echo "veuillez saisir 2 caractere minimum \n";
}



}while(strlen($prenom)<2);


 echo " bonjour $prenom";






 ?>
