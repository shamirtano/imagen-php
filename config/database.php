<?php

require_once "config.php";

class Database {
   
    private $stmt;
    private $conn;

    public function __construct() {
        try {
            $this->stmt = "mysql:host" . DB_HOST . ";port=3306;dbname=" . DB_NAME . ";charset=utf8";
            $this->conn = new PDO($this->stmt, DB_USER, DB_PASS);
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
    }

}