<?php

class Connexion 
{

    private const HOTE = "localhost" ;
    private const DBNAME = "guide" ;
    private const USER = "root" ;
    private const PASSWORD = "";

    private static $connexion = null;

    private function __construct()
    {

    }

    public static function getInstance()
    {
        if(is_null(self::$connexion))
        {
            try {
             self::$connexion = new PDO('mysql:host='.self::HOTE.';dbname='.self::DBNAME,self::USER,self::PASSWORD, array(

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



////////////Pour la connexion PDO : voici un modèle de classe réutilisable qui renvoie un objet de connexion unique basé sur le design pattern "singleton":

// <?php
// class maConnection {
//     private static $connection = null;    
//     private function __construct() {
//     }
//     static public final function getInstance() {
//         if (is_null(self::$connection)){
//             try {
//               self::$connection=new PDO('mysql:host=localhost;dbname=colblanc','root','', array(
//                      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
//                         PDO::ATTR_CASE => PDO::CASE_NATURAL,
//                         PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
//                         PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
//                     ));
//             }
//              catch(PDOException $e) {
//                     die("Database connection failed: " . $e->getMessage());
//                 echo "erreur connexion";  
//             }
//         }   
//         return self::$connection;     
//     } 
//    }
// ?>
 <!-- Dans cet exemple la la base de données s'appelle "colblanc" ,
 l'utilisateur "root", le mot de passe est chaine vide"" et l'hôte où se trouve la base c'est "localhost" ( SGBD local) ... A vous d'adapter ce code à votre base de données et votre utilisateur.  -->