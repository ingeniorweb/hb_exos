




<article>

    <p>Commenter l'article:</p>
    <h1>

        <?php echo $_GET['titre']; ?>
    </h1>



    <form action="app.php?module=article&action=enregistrer_commentaire" method="post">



        <div class="form-group">
            <label for="usr">Commentez:</label>
            <input type="text" class="form-control" id="contenu"name="contenu" >
        </div>

        <div class="form-group">
            <label for="usr"></label>
            <input type="hidden" class="form-control" id="article_id"name="article_id" value="<?php echo $_GET['article_id']; ?>">
        </div>



        <p>
            <!--            <a href="app.php?module=article&action=envoyer&titre=nouvellearticle&contenu=rererrererrerrrereerrererrererererererrell&image=image_exemple.jpg&auteur=eric" class="btn btn-primary" >Envoyer</a> -->
            <button class="btn btn-default" type="submit">envoyer</button>
        </p>
    </form>

    <footer>

        <br>
        <p>
            <a href="app.php" class="btn btn-primary" >retour</a> 
        </p>



        </i>
    </footer>
</article>

