<?php


require  'ingredient.php';



$farine = new Ingredient('Farine');
echo $farine->get_nom(). PHP_EOL;

$farine->set_nom('farine T55');
echo $farine->get_nom().PHP_EOL;

$farine2 = new Ingredient('Farine2');
$farine->copyTo($farine2);

echo $farine2->get_nom().PHP_EOL;

