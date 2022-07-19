<?php 
class point
{

//attribut
private float $x;
private $y;

//constructeur
public function __construct($x,$y)
{
    $this ->x = $x;
    $this->y = $y;
    
}
public function se_construire():float
{
    return $this-> x;
    echo 'aaa';

}
public function position_avbscisse_et_ordonnee():int
{
    return $this-> x =   $this-> y;
  
}









}