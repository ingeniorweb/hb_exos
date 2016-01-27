<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Controleur;

class BlogControleur extends \lib\BackControleur {

    protected function indexAction() {
        echo "hello wworld!";

        $am = new \Modele\ArticleManager();
        $articles = $am->getDernierTroisArticles();

        foreach ($articles as $article) {
            $article->setDate_creation($article->getDate_creation());
        }


        $data = ['articles' => $articles];
        $this->render('index.html.php', $data);
    }

    protected function detailAction() {
        $id = $_GET['id'];


        $am = new \Modele\ArticleManager();
        $article = $am->getArticle($id);
//        $data = ['titre' => 'detai        l de article'];
        $data = ['article' => $article];


        $com = new \Modele\CommentaireManager();
        $commentaires = $com->getTousLesCommentaires($id);

        $data = ['article' => $article, 'commentaires' => $commentaires];


        $this->render('detail.html.php', $data);
    }

}
