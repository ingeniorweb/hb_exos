<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Classe;

Class Connection {

    static $c = NULL;

    public static function get() {

        $dsn = 'mysql:dbname=catalogues;host=127.0.0.1';
        $user = 'root';
        $password = '';

        if (self::$c == NULL) {
            try {
                $pdo = new \PDO($dsn, $user, $password);
                self::$c = $pdo;
                return self::$c;
            } catch (\PDOException $e) {
                echo 'Connexion échouée : ' . $e->getMessage();
            }
        }
    }

}
