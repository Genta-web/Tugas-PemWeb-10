<?php
class Database {
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "school_db";
    public $conn;

    public function connect() {
        try {
            $this->conn = new PDO(
                "mysql:host=" . $this->host . ";dbname=" . $this->database,
                $this->username,
                $this->password
            );
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $this->conn;
        } catch(PDOException $e) {
            echo "Koneksi gagal: " . $e->getMessage();
            return null;
        }
    }
}