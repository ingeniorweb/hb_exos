


<p><?php
?></p>

<article>


    <h1>
        <?php
        echo $article->getTitre();
        ?>
    </h1>
    <p>
        <img src="image/<?php
        echo $article->getImage();
        ?>" alt="Mountain View" style="width:300px;height:300px;">
             <?php
             echo $article->getContenu();
             ?>
    </p>

    <footer>
        <i>
            <?php
            echo $article->getDate_creation();
            ?>
            <br>
            <p>
                <a href="app.php?module=article&action=formulaire_commentaire&article_id=<?php echo $article->getId(); ?>&titre=<?php echo $article->getTitre(); ?>" class="btn btn-primary" >Commenter</a> 
            </p>
            <p>
                <a href="app.php" class="btn btn-primary" >retour</a> 
            </p>



        </i>
    </footer>
</article>



<p><?php foreach ($commentaires as $commentaire): ?></p>



    <p>
        <?php
        echo $commentaire->getContenu();
        ?>
    </p>

    <?php
endforeach;
