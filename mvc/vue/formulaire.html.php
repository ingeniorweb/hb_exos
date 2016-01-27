




<article>


    <h1>
        envoi d'article:
    </h1>



    <form action="app.php?module=article&action=enregistrer" method="post" enctype="multipart/form-data">


        <div class="form-group">
            <label for="usr">Titre:</label>
            <input type="text" class="form-control" id="titre" name="titre">
        </div>
        <div class="form-group">
            <label for="usr">Contenu:</label>
            <input type="text" class="form-control" id="contenu"name="contenu" >
        </div>

        <div class="form-group">
            <label for="usr">image:</label>
            <input type="file" class="form-control" id="image"name="image" >
        </div>
        <div class="form-group">
            <label for="usr">Auteur:</label>
            <input type="text" class="form-control" id="auteur" name="auteur">
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

