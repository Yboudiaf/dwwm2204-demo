<?php

require 'point.php';

$point1 = new point(25,12);
/*
echo $point1->afficher().PHP_EOL;
echo "point1 apres deplacement vectoriel de 5: ".PHP_EOL;

$point1->teslation(5,5);

echo $point1->afficher().PHP_EOL;


echo "Creation du symetrique point2 par raport à l'axe des ordonnées :".PHP_EOL;
$pointSymO = $point1->symetrique_ordonnee();
echo $pointSymO->afficher().PHP_EOL;

echo "Creation du symetrique point3 par raport à l'axe des abscisses :".PHP_EOL;
$pointSymA = $point1->symetrique_abscisse();
echo $pointSymA->afficher().PHP_EOL;

echo "Creation du symetrique point_origine par raport à l'axe des abscisses et des ordonées :".PHP_EOL;
$pointSymO = $point1->symetrique_origine();
echo $pointSymO->afficher().PHP_EOL;
*/
echo "Permutation de l'abscisse et l'ordonnée :".PHP_EOL;
 $permutationCoordonnee = $point1->permutation();
 echo $permutationCoordonnee->afficher().PHP_EOL;

?>
