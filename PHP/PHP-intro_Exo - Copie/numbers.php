<?php

$a = 23;

$b = 17;



if($a > $b){

    echo " $b est inferieur à $a";

}else {

    echo $a . 'est inferieur à '.$b;

}
echo PHP_EOL;

for($i = $b ; $i <= $a ; $i++ ){

    echo $i .' ';
    
}
