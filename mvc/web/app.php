<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 * 
 * 
 * ////$app->run();
  //->controleur
  //        ->appel une methode
  class abstraite dans lib (name space lib)
 * 
 * faire un autoload dans app.php
 * 
 * 4 fichiers:
 * app
 * application.php dans lib (class mre abstraite de frontend.php
 * controler
 * class abstraite dans lib
 * 
 * 
 * APP:
 * -autoload dans lib include dans app
 * -new lib frontend.php
 */

include '../lib/autoload.php';

$app = new lib\FrontEnd();
$app->run();
