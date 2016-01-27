<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 * 
 * recuêrer nom et methode du controler a declancher sinon valeur par default
 */

namespace lib;

class FrontEnd extends Application {

    public function run() {

        if (isset($_GET['module']))
            $module = $_GET['module'];
        else
            $module = 'blog';

        if (isset($_GET['action']))
            $action = $_GET['action'];
        else
            $action = 'index';

        if (isset($_GET['id']))
            $id = $_GET['id'];
        else
            $id = '0';

        $controleur = $this->getControleur($module);
        $controleur->action($action);
    }

}
