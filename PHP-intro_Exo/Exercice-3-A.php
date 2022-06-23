<?php
function getMC2(): string
{
    return "Albert EINSTEIN'S ";
}
echo getMC2() . PHP_EOL;


function getUserName($a, $b): string
{
    return $a . $b;
}
echo getUserName("yaya", " tata") . PHP_EOL;


function getFullName($a, $b): string
{
    return strtolower($a) . strtoupper($b);
}

echo getFullName('yacine ', 'boudiaf') . PHP_EOL;


function askUser($a, $b): string
{

    return 'Bonjour ' . getFullName($a, $b) . " Connaissez vous " . getMC2() . PHP_EOL;
}
echo askUser('yacine ', 'boudiaf ');
