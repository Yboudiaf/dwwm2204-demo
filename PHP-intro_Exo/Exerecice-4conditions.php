<?php
function isMajor($age): bool
{

    if ($age >= 18) {
        echo "true".PHP_EOL;
        return true;

    }  else {
        echo "false".PHP_EOL;
        return false;
    }
}
echo isMajor(8);

function getRetired($inputRetraite):string
{
        $retraite = 60;
        if ($inputRetraite <= 0)
        {
               
            return 'Vous êtes pas encore née'.PHP_EOL;;
        }
        elseif ($inputRetraite == $retraite)

        {
           return 'Vous êtes à la retraite !'.PHP_EOL;
        }
        elseif ($inputRetraite > $retraite)

        {
           $anéeDeRetraite = $inputRetraite - $retraite;
           return "vous êtes en retraite depuis $anéeDeRetraite ans".PHP_EOL;
        }

        elseif ($inputRetraite < $retraite)
        {
            $annéeAvantLaRetraite = $retraite -$inputRetraite;
            return "il vous reste $annéeAvantLaRetraite avant la retraite".PHP_EOL;
        }
}echo getRetired(60);

function getMax($a,$b,$c):float
{

    if((($a == $b)||($a == $c))||($b == $c)){

        return '0'.PHP_EOL;
    }
    elseif
    (( $a > $b) && ($a > $c))
    {
        return number_format($a,3) .PHP_EOL;
    }
    elseif
    (( $b > $a) && ($b > $c))
    {
        return number_format($b,3). PHP_EOL;
    }
    elseif
    (( $c > $a) && ($c > $b))
    {
        return number_format($c,3) .PHP_EOL;
    }
}echo number_format(getMax(14.5,4.5,5.5),3,',');

