<?php
namespace users\controller;
class ProfileController
{
    public function index()
    {
        //require '../controller/Profile_Controller.php';
        echo ProfileController::class;
        require '../View/Profile.php';
    }
}// Users\Controller\profilecontroller