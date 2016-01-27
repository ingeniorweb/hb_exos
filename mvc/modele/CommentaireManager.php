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

class CommentaireManager extends \lib\EntiteManager {

    public function getTousLesCommentaires($article_id) {

        $sql = 'SELECT * FROM commentaire WHERE article_id=' . $article_id;
        $dbh = $this->bd->query($sql);
        $dbh->setFetchMode(\PDO::FETCH_CLASS, '\Modele\Commentaire');
        return $dbh->fetchAll();
    }

    public function envoyerCommentaire($contenu, $article_id) {
        $sql = "INSERT INTO commentaire (contenu, article_id) VALUES ('$contenu','$article_id')";
        $dbh = $this->bd->query($sql);
    }

}
