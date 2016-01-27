<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace lib;

abstract class BackControleur {

    public function action($action) {
        $methode = $action . 'Action';

        if (!is_callable(array($this, $methode)))
            throw new \Exception("Action non definie pour ce module : " . $action);



        $this->$methode();
    }

//    protected abstract function indexAction();
//
//    protected abstract function detailAction();

    protected function render($vue, Array $data) {
        extract($data);
        include __DIR__ . '/../vue/' . $vue;
        $contenu = ob_get_clean();
        include __DIR__ . '/../vue/layout.html.php';
    }

}
