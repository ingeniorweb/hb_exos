<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function monautoload($classe) {

//    $classe = str_replace('\\', '/', $classe);
//    include $classe . ".php";

    $classe = str_replace('\\', '/', $classe) . '.php';
    if (file_exists('../' . $classe))
        include '../' . $classe;
}

spl_autoload_register('monautoload');
