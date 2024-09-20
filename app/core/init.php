<?php
require_once __DIR__.'/../controllers/ProductController.php';
require_once __DIR__.'/../controllers/HomeController.php';

class App {

    public function __construct()
    {
        $url = $this->parseUrl();
        
        if (!isset($url[0])) {
            $controllerName = 'HomeController';
            $methodName = 'index';
            $params = [];     
        }else{
            if (isset($url[0]) != '') {
                $controllerName = isset($url[0]) && $url[0] != '' ? ucfirst($url[0]) . 'Controller' : 'ProductController';
                $methodName = isset($url[1]) ? $url[1] : 'index';
                $params = array_slice($url, 2);
                $controllerName = ucfirst($url[0]) . 'Controller';
            } else {
                echo "Route tidak ditemukan!";
            }
        }

        // Panggil controller dan method sesuai URL
        if (file_exists(__DIR__."/../controllers/{$controllerName}.php")) {
            $controller = new $controllerName();
            if (method_exists($controller, $methodName)) {
                call_user_func_array([$controller, $methodName], $params);
            } else {
                echo "Method $methodName tidak ditemukan!";
            }
        } else {
            echo "Controller $controllerName tidak ditemukan!";
        }
    }

    public function parseUrl()
    {
        if (isset($_GET['url'])) {
            $url = $_GET['url'];
            $url = rtrim($url,'/');
            $url = filter_var($url,FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
        }
    }

}