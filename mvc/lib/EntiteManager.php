<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of EntiteManager
 *
 * @author hb
 */

namespace lib;

abstract class EntiteManager {

    protected $db;

    public function __construct() {
        $this->bd = Connection::get();
    }

}
