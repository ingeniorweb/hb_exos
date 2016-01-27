<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ArticleControleur
 *
 * @author hb
 */

namespace Controleur;

class ArticleControleur extends \lib\BackControleur {

    protected function formulaireAction() {
        $data = [];
        $this->render('formulaire.html.php', $data);
    }

    protected function formulaire_commentaireAction() {
        $id = $_GET['article_id'];
        $titre = $_GET['titre'];
        $data = ['article_id' => $id, 'article_titre' => $titre];
        $this->render('formulaire_commentaire.html.php', $data);
    }

//    protected function envoyerAction() {
//        $titre = $_GET['titre'];
//        $contenu = $_GET['contenu'];
//        $image = $_GET['image'];
//        $auteur = $_GET['auteur'];
//
//        $am = new \Modele\ArticleManager();
//        $newarticle = $am->envoyerArticle($titre, $contenu, $image, $auteur);
//    }

    protected function enregistrer_commentaireAction() {
        $article_id = $_POST['article_id'];
        $contenu = $_POST['contenu'];

        $am = new \Modele\CommentaireManager();
        $newcommentaire = $am->envoyerCommentaire($contenu, $article_id);


        header("Location: app.php?action=detail&id='$article_id'");
    }

}
