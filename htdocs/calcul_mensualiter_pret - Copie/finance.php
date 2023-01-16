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

  
    echo "votre mensualité pour votre prêt, frais de dossier inclus est de : ";
   return $mensualite ;
}

public function creerTabAmortissement():string
{
    $tab =  ' <table class="table table-success table-striped" id="table" name="table" width="60" height="50"> TABLEAU AMORTISSEMENT DU PRET: <br><br>
    <thead>
        <tr>
            <th>Numero de mois</th>
            <th>part intérêt</th>
            <th>Part amortissement</th>
            <th>Capital restant dû</th> 
            <th>mensualité</th> 
        </tr>
    </thead><tbody>';
for ($i=1; $i <= $this->duree_mois ; $i++) 
{ 
  $tab.="<tr>";
    if($i == 1)
    {  
        $numMois=$i;
        $partInteret = $this->capital_emprunt * $this->taux_interet_mensuel;
        $partAmortissement = $this->calculMensualite() - $partInteret;
        $capitalRestantDu = $this->capital_emprunt;
    }
    else
    {
        $numMois=$i;
        $partInteret = $this->capital_emprunt * $this->taux_interet_mensuel;
        $partAmortissement = $this->calculMensualite() - $partInteret;
        $capitalRestantDu = $capitalRestantDu - $partAmortissement;


    }

$tab.="<td>".$numMois."</td>" ."<td>".$partInteret."</td>" ."<td>".$partAmortissement."</td>" ."<td>".round($capitalRestantDu,2,PHP_ROUND_HALF_UP)."</td>";
$tab.="</tr>";


}
return "votre mensualité pour votre amortissement est de :  ".$tab;

}

    
}