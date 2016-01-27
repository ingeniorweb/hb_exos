

<p>
    <a href="app.php?module=article&action=formulaire" class="btn btn-primary" >ajouter</a> 
</p>
<p><?php foreach ($articles as $article): ?></p>

<article>


    <h1>
            <?php
            echo $article->getTitre();
            ?>
        </h1>
        <p>
            <img src="image/<?php
            echo $article->getImage();
            ?>" alt="Mountain View" style="width:150px;height:150px;">
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
                    <a href="app.php?action=detail&id=<?php echo $article->getId(); ?>" class="btn btn-primary" >detail</a> 
                </p>

            </i>
        </footer>
    </article>
    <?php
endforeach;
