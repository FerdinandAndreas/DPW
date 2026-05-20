<?php

class Database {

    

    private $hostname = "localhost";
    private $username = "root";
    private $password = "";
    private $dbname   = "db_praktikum11"; 

    public $con;

    public function __construct() {
        $this->connect();
    }

    private function connect() {

        $this->con = new mysqli(
            $this->hostname,
            $this->username,
            $this->password,
            $this->dbname
        );

        if ($this->con->connect_error) {
            die("Koneksi dengan database gagal: " . $this->con->connect_error);
        }

        $this->con->set_charset("utf8mb4");
    }

    
    public function prepare($sql) {

        $stmt = $this->con->prepare($sql);

        if ($stmt === false) {
            die("Prepare Error: " . $this->con->error);
        }

        return $stmt;
    }

    public function close() {
        $this->con->close();
    }

    public function __destruct() {
        if ($this->con) {
            $this->con->close();
        }
    }
}
?>
