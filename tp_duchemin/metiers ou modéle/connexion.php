<?php

class Connexion 
{

    private const HOTE = "localhost" ;//hôte local en français
    private const DBNAME = "guide" ;//Nom de la base de donnée
    private const USER = "root" ;//utilisateur
    private const PASSWORD = "";//mot de passe

    private static $connexion = null;

    private function __construct()
    {

    }

    public static function getInstance()
    {
        if(is_null(self::$connexion))
        {
            try {
             self::$connexion = new PDO
             (
             'mysql:host='.self::HOTE.';
             dbname='.self::DBNAME,
             self::USER,
             self::PASSWORD, 
             array(

                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,/*affichage des erreurs*/ 
                       PDO::ATTR_CASE => PDO::CASE_NATURAL,/*affichage des noms de champs*/ 
                       PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_NUM,/*affichage du resultat par indice de colonnes */ 
                       PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"/*encodage des zones de texte*/ 
                   ));

                
           } 
            catch (PDOException $e) 
            {
                die("Connexion base de données échoué: ". $e->getMessage());
                echo "erreur connexion";  
            }
           
        }
       
            return self::$connexion;
       

    }

}

