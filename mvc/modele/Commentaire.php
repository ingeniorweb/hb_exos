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

class Commentaire extends \lib\Entite {

    protected $contenu, $article_id, $date2creation;

    public function getContenu() {
        return $this->contenu;
    }

    public function getArticle_id() {
        return $this->article_id;
    }

    public function getDate2creation() {
        return $this->date2creation;
    }

    public function setContenu($contenu) {
        $this->contenu = $contenu;
        return $this;
    }

    public function setArticle_id($article_id) {
        $this->article_id = $article_id;
        return $this;
    }

    public function setDate2creation($date2creation) {
        $this->date2creation = $date2creation;
        return $this;
    }

    public function __construct($data = Array()) {
        $this->date = new \datetime;

        parent::__construct($data);
    }

}
