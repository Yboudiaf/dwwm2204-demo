<?php
require './Ustensile.php';
$cuillere = new Ustensile('cuillere');
$fouet = new Ustensile('Fouet');

echo $cuillere-> get_nom().PHP_EOL;
echo $fouet->get_nom().PHP_EOL;