<?php

$tableau = ['','BOUDIAF','KIPS','KREITZ','RIBEIRO',""];

function PremierElementTableau($tableau)
{
    if($tableau=="")
         {
            echo(" null");

         }
         else
         {
           echo( $tableau);
         }

}PremierElementTableau($tableau[1])."<div>";
////////////////////////////////////
function DernierElementTableau($tableau)
{
    if($tableau=="")
         {
            echo(" null");

         }
         else
         {
           echo( $tableau);
         }

}DernierElementTableau($tableau[5]). "<div>";