<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Connection
 *
 * @author hb
 * return /PDO
 */

namespace lib;

use \PDO;

class Connection {

    protected static $host = 'localhost', $bdd = 'catalogues', $user = 'root', $pwd = '';
    protected static $pdo = null;

    public static function get() {
        if (self::$pdo === null) {
            self::$pdo = new \PDO('mysql:host=' . self::$host . ';dbname=' . self::$bdd, self::$user, self::$pwd, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8', PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        }
        return self::$pdo;
    }

}
