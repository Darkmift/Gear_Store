<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Database {

    public static $instance;

    public static function getInstance() {
        if (!isset(Database::$instance)) {
            Database::$instance = new Database();
            return Database::$instance;
        } else {
            return "Cannot instanciate,already exist once.<hr>";
        }
    }

    private function __construct() {
        
    }

    public function getQuery() {
        return "SELECT *FROM some_table";
    }

}

$db = Database::getInstance();
$db2 = Database::getInstance();
$db3 = Database::getInstance();
//$db4 = new Database;//this will fail

echo $db->getQuery() . "<hr>";

var_dump($db);
echo "<hr>";
var_dump($db2);
echo "<hr>";
var_dump($db3);

