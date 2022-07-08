<?php
declare(strict_types=1);
// demander le fichier 'Compte_bancaire.php'
require 'Compte_bancaire.php';

//cree le compte pel david via le constructeur classe compte bancaire
$pel_david = new Compte_bancaire(1234566188358,"pel david",800,100);
print_r($pel_david);

//cree le compte daoud via le constructeur classe compte bancaire
$daoud = new Compte_bancaire(25304789542,"compte courant daoud,",212,160);
print_r($daoud);

//cree le compte yacine via le constructeur classe compte bancaire
$yacine = new Compte_bancaire(198419841984, "BOUDIAF Yacine",12000000,0);
//Compte crediter de 100
$yacine->crediter(850100);
//Compte debiter de 4,5
$yacine->debiter(4.5);
//Affiche l'état du compte
print_r($yacine);

//cree le compte yacine via le constructeur classe compte bancaire
$mustapha = new compte_bancaire(100000856521,"MILOUDI Mustapha",0,100);
//Compte crediter de 0.61
$mustapha -> crediter(0.61);
//Compte debiter de 0.2
$mustapha -> debiter(19.2);
//Affiche l'état du compte

$mustapha-> transfert(1700,$yacine);
print_r($mustapha);

//cree le compte kahina via le constructeur classe compte bancaire
$kahina = new Compte_bancaire(30325304789542,"compte courant kahina,",12000000,160);
$kahina-> transfert(1000000,$mustapha);
print_r($kahina);
echo $mustapha;
