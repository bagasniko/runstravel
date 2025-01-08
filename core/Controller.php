<?php

class Controller {
    protected $db;

    public function __construct() {
        $this->db = (new Database())->connect();
    }

    // Memuat model
    public function model($model) {
        $modelPath = "app/models/$model.php";
        if (!file_exists($modelPath)) {
            throw new Exception("Model $model tidak ditemukan");
        }
        require_once $modelPath;
        return new $model($this->db);
    }

    // Memuat view 
    public function view($view, $data = []) {
        $viewPath = "app/views/$view.php";
        if (!file_exists($viewPath)) {
            throw new Exception("View $view tidak ditemukan");
        }
        extract($data);
        require_once $viewPath;
    }
}
?>
