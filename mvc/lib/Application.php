<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace lib;

abstract class Application {

    public abstract function run();

    protected function getControleur($module) {
        $controleur = '\controleur\\' . ucfirst($module) . 'controleur';

        if (class_exists($controleur))
            return new $controleur();
        else
            throw new \Exception('Module non trouvée');
    }

}
