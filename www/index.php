<?php 
// page: definir la page a afficher.

/*$_GET[]= valeurs transmises par l'url
*/



// si le parametre 'page' dans l'url n'est pas vide 

//$page = !empty($_get['page'])? $_get['page']:'home';
//$_GET[]= valeur transmises par l'url


 // echo '<pre>'.var_export($_het,true);

//$tableau = array(();
//$tableau =  {};

//$tableau [] = 'toto'// 0
//$tableau [] = 'jonny'// 1 
//$tableau [] = 'gatien'// 1

//$tableau ['jonny']= 'stagiaire';

//echo $tableau [1];
//echo '<>hr';
//echo $tableau ['jonny'] 

echo '</pre>'.var_export($_GET,true);

$page = $_GET['page']?? 'home';


if($page == 'home'){

}

switch ($page)
{
    case 'home':
    //charger le fichier home.php
    require '../controller/Home_Controller.php';
    $controller = new Users\Controller\HomeController();
    $controller->index();
   
    break;
    
    case 'profile':
        //charger le fichier profile.php
        require '../controller/Profile_Controller.php';
        $controller = new Users\Controller\ProfileController();
        $controller->index();
   

    break;
    case 'groups':
        //charger le fichier group.php
        require '../controller/Group_Controller.php';
        $controller = new Users\Controller\GroupController ();
        $controller->index();
        
     
        break;

    default:
    echo 'erreur 404';
   
    break;
}