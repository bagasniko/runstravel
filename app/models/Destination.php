<?php

class Model {
    protected $db;

    public function __construct() {
        $database = new Database();
        $this->db = $database->connect();
    }

    public function query($sql) {
        try {
            $result = $this->db->query($sql);
            if ($result === false) {
                throw new Exception("Query error: " . $this->db->error);
            }
            return $result;
        } catch (Exception $e) {
            die("Database error: " . $e->getMessage());
        }
    }

    public function prepare($sql) {
        $stmt = $this->db->prepare($sql);
        if ($stmt === false) {
            die("Prepare statement error: " . $this->db->error);
        }
        return $stmt;
    }

    public function escape($value) {
        if ($value === null) {
            return 'NULL';
        }
        return $this->db->real_escape_string($value);
    }
}
?>
