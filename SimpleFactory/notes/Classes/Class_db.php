<?php

class Database implements InsertInterface {

    private $host;
    private $user;
    private $pass;
    private $db;
    public $mysqli;
    public static $instance;

    public static function getInstance() {
        if (!isset(Database::$instance)) {
            Database::$instance = new Database();
            return Database::$instance;
        }//can only exist once.
    }

    public function __construct() {
        $this->db_connect();
    }

    private function db_connect() {
        $this->host = 'localhost';
        $this->user = 'root';
        $this->pass = '';
        $this->db = 'gearshop';

        $this->mysqli = new mysqli($this->host, $this->user, $this->pass, $this->db);
        return $this->mysqli;
    }

    public function getQuery($statement, $statement_bind) {
//        $statement_bind = bind_param('ss', $name, $color);
//        $statement = $this->mysqli->prepare("INSERT INTO `cars`(`name`, `color`) VALUES (?,?)");
        $statement->$statement_bind;
        echo 'statement bound!';
    }

    public function db_insert($name, $color) {
        if (mysqli_connect_errno($this->mysqli)) {
            die("Failed to connect to MySQL: " . mysqli_connect_error());
        }
        $this->getQuery($statement, $statement_bind);
        if (!$statement->execute()) {
            echo "Execute failed: (" . $statement->errno . ") " . $statement->error;
        }
    }

}

interface InsertInterface {

    public function getQuery();
}

$db = Database::getInstance();
$db->getQuery();
