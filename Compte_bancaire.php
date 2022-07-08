<?php
declare(strict_types=1);
class Compte_bancaire
{
  
    private int $numero_de_compte;
    private string $le_nom_de_son_proprietaire;
    private float $son_solde;
    private int $decouvert_autoriser ;



public function __construct($numero_de_compte,$le_nom_de_son_proprietaire,$son_solde,$decouvert_autoriser)
{
    $this ->  numero_de_compte = $numero_de_compte;
    $this -> le_nom_de_son_proprietaire = $le_nom_de_son_proprietaire;
    $this -> son_solde = $son_solde;
    $this -> decouvert_autoriser = $decouvert_autoriser;

 
}

//appelle le numero de compte;
public function get_numero_de_compte():int
{    
    return $this -> numero_de_compte;
}


//modifie le numero de compte;
public function set_numero_de_compte(int $numero_de_compte):void
{  
    $this -> numero_de_compte = $numero_de_compte;
}


//appelle le nom de son proprietaire
public function get_le_nom_de_son_proprietaire():string
{
    return $this-> le_nom_de_son_proprietaire;
}

//modifie le nom de son proprietaire
public function set_le_nom_de_son_proprietaire(string $le_nom_de_son_proprietaire):void
{
   $this->le_nom_de_son_proprietaire = $le_nom_de_son_proprietaire;
    
}



 //appelle le solde
 public function get_son_solde():float
 {
    return $this ->son_solde;
 } 
 
 //modifie le solde
 public function set_son_solde(float $son_solde):void
 {
    $this ->son_solde = $son_solde;
 }

//appelle le decouvert autoriser
public function get_decouvert_autoriser():int
{
    return $this -> decouvert_autoriser;
}

// modifie le decouvert autoriser
public function set_decouvert_autoriser(int $decouvert_autoriser):void
{
     $this-> decouvert_autoriser = $decouvert_autoriser;
}

//ajouter un montant au solde
public function crediter(float $montant):void
{
    $this -> son_solde = $this -> son_solde + $montant;
    echo 'operation reussie'.PHP_EOL;
}

//Debite un montant au solde si le solde le permet
public function debiter(float $montant):void
{
    if($this->son_solde + $this->decouvert_autoriser >= $montant )
    {
         $this -> son_solde = $this-> son_solde - $montant;
    }
    else
    {
        echo " Operation non autoriser".PHP_EOL;
    }  
}

//transfert de l'argent
public function transfert(float $montant, Compte_bancaire $autreCompte):void
{
    $this->debiter($montant);
    if($this -> son_solde + $this -> decouvert_autoriser >= $montant )
    {
        $autreCompte->crediter($montant);
    }        

}



function __toString()
{

    return "Nom \t=> \t" . $this->le_nom_de_son_proprietaire . "\nsolde \t=> \t" . $this->son_solde . PHP_EOL;

}
}