<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Entite
 *
 * @author hb
 */

namespace lib;

abstract class Entite {

    protected $id;
    protected $erreur = [];
    protected $date;

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    public function getErreur() {
        return $this->erreur;
    }

    public function setErreur($erreur) {
        $this->erreur = $erreur;
        return $this;
    }

    protected function hydratation(Array $data) {
        foreach ($data as $key => $value) {
            $methode = 'set' . ucfirst($key);
            if (method_exists($this, $methode))
                $this->$methode($value);
        }
    }

    public function __construct($data = array()) {
        if ($data)
            $this->hydratation($data);
    }

}
