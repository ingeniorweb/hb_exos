<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ArticleManager
 *
 * @author hb
 */

namespace Modele;

class ArticleManager extends \lib\EntiteManager {

    public function getDernierTroisArticles() {
        $sql = 'SELECT * FROM article ORDER BY date_creation DESC LIMIT 0,3';
        $dbh = $this->bd->query($sql);
        $dbh->setFetchMode(\PDO::FETCH_CLASS, '\Modele\Article');
        return $dbh->fetchAll();
    }

    public function getArticle($id) {

        $sql = 'SELECT * FROM article WHERE id=' . $id;
        $dbh = $this->bd->query($sql);
        $dbh->setFetchMode(\PDO::FETCH_CLASS, '\Modele\Article');
        return $dbh->fetch();
    }

    public function envoyerArticle($titre, $contenu, $image, $auteur) {
        $sql = "INSERT INTO article (titre, contenu, image, auteur) VALUES ('$titre','$contenu','$image','$auteur')";
        $dbh = $this->bd->query($sql);
    }

}
