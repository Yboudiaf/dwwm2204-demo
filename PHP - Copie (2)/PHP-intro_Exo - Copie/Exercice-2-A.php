<?php

function getSum($a, $b): int
{

    return $a + $b;
}
echo (getSum(5, 3)).PHP_EOL;

function getSub($a, $b): int
{

    return $a - $b;
}
echo getSub(10, 5).PHP_EOL;

function getMulti($a, $b): float
{
    return $a * $b;
}
echo number_format(getMulti(32,32),2,',', ' ').PHP_EOL;

function getDiv($a, $b): int
{
    return $a / $b;
    if ($a == 0 || $b == 0) {
        return 0;
    }
}
echo getDiv(0, 5).PHP_EOL;

$name = readline();

if ($name == '') {

    echo 'nobody'.PHP_EOL;
} else {
    echo  "Hello $name".PHP_EOL;
}
