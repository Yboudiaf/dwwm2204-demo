<?php

function stringlength(string $phrase): bool
{
    if (strlen($phrase) < 9) {

        echo 'false' . PHP_EOL;
        return false;
    } else {
        echo 'true' . PHP_EOL;
        return true;
    }
}
//echo stringlength('yacinjfhtfhtyty');

function passwordCheck(string $phrase): int
{
    $pattern = '/^\S{9,}$/';
    $verif = 1;

    if (preg_match($pattern, $phrase, $matches) == 1) {
        
echo "test1". PHP_EOL;    

$regex2 = '/\W+/';
$regex3='/[A-Z]+/';
$regex4='/[1-9]+/';
$regex5='/[a-z]+/';

        if (preg_match($regex2, $phrase, $matches, PREG_OFFSET_CAPTURE) >0  &&
        preg_match($regex3, $phrase, $matches, PREG_OFFSET_CAPTURE) >0&&
          preg_match($regex4, $phrase, $matches, PREG_OFFSET_CAPTURE) >0  &&
         preg_match($regex5, $phrase, $matches, PREG_OFFSET_CAPTURE) >0) {

            echo "test2". PHP_EOL;
           // var_dump($matches);
            $verif = 1;
        } else {
            $verif = 0;
        }
    } else {
        $verif = 0;
    }



    return $verif;
};
//echo passwordCheck('abcdefghijkl') . PHP_EOL;
echo passwordCheck('01234567.A12o') . PHP_EOL;
