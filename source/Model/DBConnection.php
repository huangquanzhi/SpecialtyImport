<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DBConnection
 *
 * @author Jackie
 */

define("_DNAME","simport");
define("_DUSER","root");
define("_DPASS","password");

class DBConnection {

    private static $instance; // stores the MySQLi instance

    private function __construct() {
        
    }

// block directly instantiating

    private function __clone() {
        
    }

// block cloning of the object

    public static function get() {
        // create the instance if it does not exist
        if (!isset(self::$instance)) {
            // the MYSQL_* constants should be set to or
            //  replaced with your db connection details
            self::$instance = new PDO("mysql:host=localhost;dbname="._DNAME, _DUSER, _DPASS);
            if (self::$instance->errorInfo()) {
                throw new Exception('MySQL connection failed');
            }
        }
        // return the instance
        return self::$instance;
    }

}
