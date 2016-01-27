<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

Class Classtest {

    public $arg01 = 1;
    public $arg2 = 2;
    public $arg3 = 85;

    function getArg01() {
        return $this->arg01;
    }

    function getArg2() {
        return $this->arg2;
    }

    function getArg3() {
        return $this->arg3;
    }

    function setArg01($arg01) {
        $this->arg01 = $arg01;
        return $this;
    }

    function setArg2($arg2) {
        $this->arg2 = $arg2;
        return $this;
    }

    function setArg3($arg3) {
        $this->arg3 = $arg3;
        return $this;
    }

}
