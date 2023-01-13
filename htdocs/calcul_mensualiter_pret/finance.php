<?php


class Pret
{
    //attribut

    private float $capital_emprunt; //k
    private int $duree_mois;//an
    private float $taux_interet_mensuel  ;//ta

    //constante
 public const frais_dossier = 50;

 //constructeur 3 arguments undescord pour référerncer l'argument
    public function __Construct(float $_capital_emprunt , int $_duree_annees,float $_taux_interet_annuel )
    {
        //this fait référence à la fonction en cour de l'argument 
        $this->capital_emprunt = round($_capital_emprunt,2,PHP_ROUND_HALF_UP) ;//PHP_ROUND_HALF_UP pour arrondir au niveau supérieur
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
    
    //Quotient = La fonction pow(renvoie x élevé à la puissance y))
    $Q = (1-pow(1+$this->taux_interet_mensuel,-$this->duree_mois));

    //La mensualite = le capital emprunter multiplié par taux interêt diviser par quotient
    $mensualite = $this->capital_emprunt * $this->taux_interet_mensuel/$Q;

    //Rajout des frais de dossier
    $mensualite_dossier = $mensualite + self::frais_dossier;
    echo "votre mensualité pour votre prêt, frais de dossier inclus est de : ";
   return round($mensualite_dossier,2) ;
}

function creeElements()
{

    $elementTD = "<td></td>";

     for ($i=0; $i <$elementTD ; $i++) { 
        
        

     }






}

    
}