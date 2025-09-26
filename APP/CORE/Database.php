<?php

class Database {
    private $host = DBHOST;
    private $user = DBUSER;
    private $pass = DBPASS;
    private $dbname = DBNAME;

    protected $conn;

    public function __construct() {
        $this->connect();
    }

    private function connect() {
        $this->conn = new mysqli($this->host, $this->user, $this->pass, $this->dbname);

        if ($this->conn->connect_error) {
            die("DB Connection Failed: " . $this->conn->connect_error);
        }
    }
}