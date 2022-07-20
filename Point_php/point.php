<?php 
class Point
{

//attributs

private float $x;
private float $y;

//constructeur
public function __construct(float $position_x,float $position_y)
{
    $this->x = $position_x;
    $this->y = $position_y;
    
}
public function afficher():string
{
 $chaine = "Ce point a pour abscisse : ".$this->x." Et pour ordonnée : ".$this->y;
 return $chaine;
}

public function move_set():float
{
return $this-> positionx_x = $this ->position_y;
}

public function teslation(float $deplace_x,float $deplace_y): void
{
$this->x += $deplace_x ;
$this->y += $deplace_y;
}

public function symetrique_ordonnee(): Point
{
   $symY = new Point(-$this->x,$this->y);
   return $symY;
}

public function symetrique_abscisse(): Point
{
   $symX = new point($this->x,-$this->y);
   return $symX;
}
public function symetrique_origine():Point
{
    $symOrigine = new Point(-$this->x,-$this->y);
    return $symOrigine;
}

public function permutation():Point
{
    $permutationCoordonnee = new point($this->y, $this->x);
    return  $permutationCoordonnee;
}

}