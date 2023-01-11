<?php

class Pret
{
    //attribut

    private float $capital_emprunt; //k
    private int $duree_mois;//an
    private float $taux_interet_mensuel  ;//ta

    //constante
 public const frais_dossier = 50;

    public function __Construct(float $_capital_emprunt , int $_duree_annees,float $_taux_interet_annuel )
    {
        $this->capital_emprunt = round($_capital_emprunt,2,PHP_ROUND_HALF_UP) ;
        $this->duree_mois = $_duree_annees * 12;
        $this->taux_interet_mensuel = $_taux_interet_annuel /(100 * 12);

    }
    //Proprieté
    public function get_tauxinteret_annuel()
    {
        
    }
    public function set_tauxinteret_annuel()
    {
        
    }

    //Methodes
public function calculMensualite():float
{
    $Q = (1-pow(1+$this->taux_interet_mensuel,-$this->duree_mois));
    $mensualite = $this->capital_emprunt * $this->taux_interet_mensuel/$Q ;
    return round($mensualite,2) ;
}

    
//     var $chaine= " M(e)".$this->duree_annees." votre emprunt mensuel sur le capital de ". $capital_emprunt ." est de : " ;
//    $this->capital_emprunt ;
//    $chaine.=$this->taux_mensuel_interet." €";
//    return $chaine

}