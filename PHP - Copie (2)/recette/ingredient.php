<?php

class Ingredient
 {
private string $nom;
private float $quantite_necessaire;
private string $unite_de_mesure ;
//tableau d'ustensil
private array $Ustensile;

public function __construct(string $nom)
{
  
  $this->set_nom($nom);
  $this->quantite =0;
  $this->unite_de_mesure = "g";
}

public function get_nom():string
{
return  $this->nom;


}


/**
 * Definit un nouveau nom pour l'ingredient
 * le nom doit respecter les conditions suivantes;
 * 2 caractere minimum , uniquement lettres,chiffres et tiret (-)
 * @param string $nouveau_nom le nouveau nom de l'ingredient
 * @throws Exeption le format du nouveau_nom est incorrect
 */
public function set_nom(string $nouveau_nom):void
{
  if(mb_strlen($nouveau_nom) >= 2)
  {
      $this ->nom = $nouveau_nom;
  }else
  {
    throw new Exception('Le nouveau nom est invalide');
  }
}
public function copyTo(Ingredient $autre_ingredient):void
{
    $autre_ingredient ->nom = $this->nom;

}
 
}

