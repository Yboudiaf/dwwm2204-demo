<?php

function Html_List(string $nom_de_la_liste , array $element_liste)
{
    $nom_de_la_liste = "<h3>$nom_de_la_liste</h3>";
    $chaineliste = "<ul>";
  
  for ($i=0; $i <count($element_liste) ; $i++) { 


    $chaineliste.="<li>$element_liste[$i]</li>";
  }
   
  $chaineliste.="</ul>";
  

    //  for ($element_liste =0;  $element_liste <  $nom_de_la_liste; $element_liste++) {  

    //     $element_liste ++;
    //  }
      return $nom_de_la_liste.$chaineliste;
}
$chaine= Html_List("Prenom", ["Yacine","Jose","Julian","Willy","Daoud","Bastian"]);
echo $chaine;
?>
<fo