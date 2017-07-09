<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class USingleton {

    private static $instances = array();
    
    private function __construct() {}

    public static function getInstance($class){

        if(!isset(self::$instances[$class])){
                self::$instances[$class]=new $class;
        }
        return self::$instances[$class];
    }
}