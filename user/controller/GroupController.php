<?php

namespace users\controller;
/**
 * gérer les actions de l'interface 
 * utilisateur des groupes
 * @author Yacine
 * @version 0.0.1
 * @license MIT
 */
class GroupController
{

    /**
     * route/?page=groups
     * @return void 
     */
    public function index():void
    {
        //require '../controller/Group_Controller.php';
        echo GroupController::class;
        require '../View/groups.php';
    }

    /**
 * route /?page=groups§action=add
 * @return void
 */

public function add():void
{

}
} // fin classe

