<?php

require './Animal.php';
require './bee.php';
require './dog.php';


$animal = new Animal(" dog "," dogfood ");
$animal2 = new Animal(" cat "," mouse ");

$animal->eat();
$animal2->move();

$bee = new bee();

$bee->move();