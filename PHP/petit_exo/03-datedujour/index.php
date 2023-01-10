<?php

function DateDuJour()
{
    $date = new Datetime();
    return $date->format('d-m-Y ');
}
$datejour= DateDuJour();
$tabdatejour= explode("-",$datejour); 
$chainedate= $tabdatejour[0]."/".$tabdatejour[1]."/".$tabdatejour[2];

echo $chainedate;

