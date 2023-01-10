<?php

class ComptablePublic
{
    //attribut
    private float $revenu;
    private string $nom;
    private float $impot;

    //constantes de type static
    public const taux1 = 0.09;
    public const taux2 = 0.014;
    //constructeur
    public function __Construct(string $_nom,float $_revenu)
    {
        $this->nom = $_nom;
        $this->revenu = round($_revenu,2,PHP_ROUND_HALF_UP);
        $this->impot =0;
    }
    //propriétés
    public function getRevenu():float
    {
        return $this->revenu;
    } 
    public function getNom():string
    {
        return $this->nom;
    } 
    public function setNom(string $_nouveau):void
    {
        $this->nom=$_nouveau_nom;
    }
    //methodes
    public function calculImpot():string
    {
        $chaine= " M(e)".$this->nom."votre impot sur le revenu est de : ";
        if($this->revenu <=15000)
        {
            $this->impot = $this->revenu * self::taux1;
        }
        else
        {

            $this->impot= 15000*self::taux1 + ($this->revenu-15000)*self::taux2;
           
        }
        $this->impot=round($this->impot,2);
        $chaine.=$this->impot." €";
        
        return $chaine;
    }




}