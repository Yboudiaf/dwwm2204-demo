<?php

function getSum($a, $b): int
{

    return $a + $b;
}
echo (getSum(5, 3));

function getSub($a, $b): int
{

    return $a - $b;
}
echo getSub(10, 5);

function getMulti($a, $b): float
{
    return $a * $b;
}
echo getMulti(2.6, 5.3);

function getDiv($a, $b): int
{
    return $a / $b;
    if ($a == 0 || $b == 0) {
        return 0;
    }
}
echo getDiv(0, 5);

$name = readline();

if ($name == '') {

    echo 'nobody';
} else {
    echo  "Hello $name";
}
