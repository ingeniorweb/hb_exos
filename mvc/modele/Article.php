<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Article
 *
 * @author hb
 */

namespace Modele;

class Article extends \lib\Entite {

    protected $titre, $contenu, $image, $auteur, $date_creation;

    public function getDate_creation() {
        return $this->date_creation;
    }

    public function setDate_creation($date_creation) {
        $this->date_creation = $date_creation;
        return $this;
    }

    public function getTitre() {
        return $this->titre;
    }

    public function getContenu() {
        return $this->contenu;
    }

    public function getImage() {
        return $this->image;
    }

    public function getAuteur() {
        return $this->auteur;
    }

    public function setTitre($titre) {
        if (strlen($titre) < 2)
            $this->erreur[] = 'Mauvais format';


        $this->titre = $titre;

        return $this;
    }

    public function setContenu($contenu) {
        $this->contenu = $contenu;
        return $this;
    }

    public function setImage($image) {
        $this->image = $image;
        return $this;
    }

    public function setAuteur($auteur) {
        $this->auteur = $auteur;
        return $this;
    }

    public function __construct($data = Array()) {
        $this->date = new \datetime;

        parent::__construct($data);
    }

}
