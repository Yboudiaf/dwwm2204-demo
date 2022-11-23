<?php

// retourne la date d'auhourd'hui
function getToday($date):string
{

  return  date('d/m/y');
}
echo getToday('').PHP_EOL;

// compares les dates
function getTimeLeft($daoud):string
{
    //recupere la date d'aujourd'hui
    $dateToDay = new DateTime();
    //cree une date
    $daoud = new DateTime($daoud);

    //si les dates sont identiques
  if($dateToDay == $daoud){

    return "aujourd'hui";

  }elseif($dateToDay > $daoud){

    return 'Evenement passée';

  }else{

    //methode pour comparer les dates
    $interval = date_diff($dateToDay ,$daoud);
    return 'il reste ' . $interval->format('%y') . ' an(s) ' . $interval->format('%m') . ' mois ' . $interval->format('%d') . ' jour(s)'.PHP_EOL; 
  }
}
echo getTimeLeft("2023-07-05");