<?php

class Database {
    private $host = "localhost";
    private $username = "root"; // Sesuaikan dengan username database Anda
    private $password = ""; // Sesuaikan dengan password database Anda 
    private $db_name = "travel_website"; // Nama database
    private $conn;

    public function connect() {
        if ($this->conn == null) {
            try {
                $this->conn = new mysqli($this->host, $this->username, $this->password, $this->db_name);
                if ($this->conn->connect_error) {
                    throw new Exception("Connection failed: " . $this->conn->connect_error);
                }
            } catch (Exception $e) {
                die("Database connection error: " . $e->getMessage());
            }
        }
        return $this->conn;
    }
}
?>
