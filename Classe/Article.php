<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Classe;

class Article {
    private $id;
    private $titre;
    private $description;
    private $date;
    
    
    function getId() {
        return $this->id;
    }

    function getTitre() {
        return $this->titre;
    }

    function getDescription() {
        return $this->description;
    }

    function getDate() {
        return $this->date;
    }

    function setId($id) {
        $this->id = $id;
        return $this;
    }

    function setTitre($titre) {
        $this->titre = $titre;
        return $this;
    }

    function setDescription($description) {
        $this->description = $description;
        return $this;
    }

    function setDate($date) {
        $this->date = $date;
        return $this;
    }


}