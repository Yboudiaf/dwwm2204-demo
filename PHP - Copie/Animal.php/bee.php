<?php

class bee extends Animal
{

    public function __construct()
    {
        parent ::__construct(" Bee "," Nectar ").PHP_EOL;
    }
    
 //Comportement de la function deplacer
    public function move(): void
    {
        echo $this->species .' flies '.PHP_EOL;
    }

}