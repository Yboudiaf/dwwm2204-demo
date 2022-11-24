    <?php

// demander le fichier 'Compte_bancaire.php'
require 'Compte_bancaire.php';

//cree le compte yacine via le constructeur classe compte bancaire
$yacine = new Compte_bancaire(198419841984, "BOUDIAF Yacine",12000,0);
//Compte crediter de 100
$yacine->crediter(850100);
//Compte debiter de 4,5
$yacine->debiter(4.5);
//Affiche l'état du compte
print_r($yacine);

//cree le compte yacine via le constructeur classe compte bancaire
$mustapha = new compte_bancaire(100000856521,"MILOUDI Mustapha",21110,100);
//Compte crediter de 0.61
$mustapha -> crediter(0.61);
//Compte debiter de 0.2
$mustapha -> debiter(19.2);
//Affiche l'état du compte

$mustapha-> transfert(-1700000,$yacine);
$mustapha->superieur($yacine,$mustapha);

print_r($mustapha);
