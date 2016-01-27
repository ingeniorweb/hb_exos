<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//include 'Class/Humain.php';
//include 'Class/Stagiaire.php';
//include 'Class/Entite.php';
//c'est mieux avec autoload ***
//utilisation  de l'alias pour ne pas devoir reecrire Classe\Humain partou
//use Classe\Humain as Humain;



function monautoload($classe) {

    $classe = str_replace('\\', '/', $classe);
    include $classe . ".php";
}

spl_autoload_register('monautoload');


$personne = new Classe\Humain('toto', 'riri');

$stagiaire = new Classe\Stagiaire('ululu', 'riri', 'rere@rere');


var_dump($stagiaire);

$moi = new Classe\Stagiaire('zozozo', 'tytytyty', 'rebbbb@jjhhhgre');
//$personne->nom = 'toto2';

var_dump($stagiaire);
//echo parler("hooh", "red");

echo Classe\Stagiaire::MA_CONST;
echo '<br>';
echo Classe\Stagiaire::$nombre;
echo '<br>';
echo Classe\Stagiaire::bonjour('tyututu');
echo '<br>';
echo $stagiaire->nom;

var_dump($moi);

$formateur = new Classe\Test\Formateur ();

$connection = Classe\Connection::get();
var_dump($connection);


