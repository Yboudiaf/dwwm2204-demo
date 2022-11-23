<?php
$names = ["joe", "jack", "lea", "zoe", "neo"];

function firstItem(array  $names): string

{
  return $names[0];
}
echo '______firstItems()______'. PHP_EOL;
echo firstItem($names) . PHP_EOL;
echo  PHP_EOL;

function lastIttem(array $dernierElement): string
{

  if (count($dernierElement) === 0) {
    return 'null';
  } else {

    return $dernierElement[count($dernierElement) - 1];
  }
}
echo '______lastItem()______'. PHP_EOL;
echo lastIttem($names) . PHP_EOL;
echo PHP_EOL;



function sortitems(array $oredreDeCroissanr):array
{
  if (count($oredreDeCroissanr) === 0) {

    return '';

  } 
  else 
  {
    rsort($oredreDeCroissanr);
    return $oredreDeCroissanr;
  }
}
$temp=sortitems($names);
echo '______sorItems()______'. PHP_EOL;

foreach((array)$temp as $e){

  echo $e . PHP_EOL;}


echo '________________'. PHP_EOL;



function stringItems(array $ordreCroissant): string
{
 
 
  if (count($ordreCroissant) === 0) {

    return ' Nothing to display';

}else
{ 
      sort($ordreCroissant); 
      $stringItem=$ordreCroissant[0];
      for($i = 1; $i < count($ordreCroissant) ;$i++){
      $stringItem .= ', ' . ucfirst($ordreCroissant[$i]) ;
  }
  return $stringItem;
}

}
echo '______stringItems()______'. PHP_EOL;
echo stringItems($names).PHP_EOL;


