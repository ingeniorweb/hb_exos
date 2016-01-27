<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Classe;

class Humain {

    protected $nom;
    protected $prenom;

    public function __construct($nom, $prenom) {

        $this->nom = $nom;
        $this->prenom = $prenom;
    }

    public function parler($phrase) {
        return $this->$phrase;
    }

    function getPrenom() {
        return $this->prenom;
    }

    function setPrenom($prenom) {
        $this->prenom = $prenom;
        return $this;
    }

    public function getNom() {
        return $this->nom;
    }

    public function setNom($nom) {
        $this->nom = $nom;
        return $this;
    }

}
