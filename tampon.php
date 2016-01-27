<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$titre = 'Hello world!';

ob_start();

include 'maquette.php';

//ob_end_clean(); vidannge du temposisation delete du tampon

$contenu = ob_get_clean();

var_dump($contenu);
