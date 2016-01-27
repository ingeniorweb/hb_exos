<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//buffering ob_start()

namespace Classe;

class Stagiaire extends Humain {

    protected $email;
    public static $nombre;
    public $formateur;

    const MA_CONST = 999;

    public function __construct($nom, $prenom, $email) {
        parent::__construct($nom, $prenom);
        $this->email = $email;
        $this->formateur = new Test\Formateur;
        self::$nombre++;
    }

    function setFormateur(\Classe\Test\Formateur $formateur) {
        return $this->formateur = $formateur;
    }

    function parler($phrase, $couleur = 'red') {
        echo '<span style="color:' . $couleur . '">' . $phrase . '</span>';
    }

    public static function bonjour($nom) {
        echo 'bonjour ' . $nom;
    }

    public function __get($prop) {
        return $this->$prop;
    }

    function getEmail() {
        return $this->email;
    }

    function setEmail($email) {
        $this->email = $email;
        return $this;
    }

}
