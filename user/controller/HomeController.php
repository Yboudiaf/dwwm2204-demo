<?php

namespace users\controller;
 class HomeController
 {

    public function index()
    {
          //require '../controller/Home_Controller.php';
          echo HomeController::class;
        require '../view\home.php';
    }
 } 