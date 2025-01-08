<?php

// Autoload kelas-kelas inti
spl_autoload_register(function($class) {
    $corePath = 'core/' . $class . '.php';
    if (file_exists($corePath)) {
        require_once $corePath;
    }
});

class Router {
    private $uri;
    private $params;
    private $controllerName;
    private $methodName;
    private $methodParams;

    public function __construct() {
        $this->uri = $_GET['url'] ?? 'home';
        $this->parseUri();
        $this->setControllerAndMethod();
    }

    private function parseUri() {
        $this->params = explode('/', $this->uri);
        $this->params = array_filter($this->params);
        $this->params = array_values($this->params);
    }

    private function setControllerAndMethod() {
        $this->controllerName = ucfirst(strtolower($this->params[0] ?? 'home')) . 'Controller';
        $this->methodName = $this->params[1] ?? 'index';
        $this->methodParams = array_slice($this->params, 2);
    }

    public function dispatch() {
        $controllerFile = 'app/controllers/' . $this->controllerName . '.php';

        try {
            if (!file_exists($controllerFile)) {
                throw new Exception("Controller file tidak ditemukan");
            }

            require_once $controllerFile;

            if (!class_exists($this->controllerName)) {
                throw new Exception("Controller class tidak ditemukan");
            }

            $controller = new $this->controllerName();

            if (!method_exists($controller, $this->methodName)) {
                throw new Exception("Method tidak ditemukan");
            }

            call_user_func_array([$controller, $this->methodName], $this->methodParams);

        } catch (Exception $e) {
            header("HTTP/1.0 404 Not Found");
            echo "404 - " . $e->getMessage();
        }
    }
}

// Inisialisasi router dan jalankan aplikasi
$router = new Router();
$router->dispatch();

?>
