<?php

class Animal
{
    //Attribut de la classe
    protected string $species;
    private string $food;

    public function __construct(string $_species , string $_food )
    {
        $this->species=$_species;
        $this->food=$_food;
        echo ' Animal constructor for '.$this->species.PHP_EOL;

    }
    //Comportement de la function manger
    public function eat(): void
    {
        echo $this->species .' eats '.$this->food.PHP_EOL;

    }
 //Comportement de la function deplacer
    public function move(): void
    {
        echo $this->species .' moves '.$this->food.PHP_EOL;
    }


}