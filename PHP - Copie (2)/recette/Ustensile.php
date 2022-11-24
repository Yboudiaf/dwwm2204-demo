<?php
class Ustensile
{
private string $nom;

public function __construct($sonNom)
{
    $this->nom = $sonNom;
}

public function get_nom():string
{
    return $this-> nom;
}


}
