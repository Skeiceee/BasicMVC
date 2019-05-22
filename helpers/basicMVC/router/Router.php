<?php namespace Router;

use Router\Route;

class Router{

    protected $base_path;
    protected $path;
    public $routes = array();

    function __construct($base_path = ''){
        $this->base_path = $base_path;
        $path = urldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
        $path = substr($path, strlen($base_path));
        $this->path = $path;
    }

    public function add($path, $callback){
        $this->routes[] = new Route($path, $callback);
    }

    public function run(){
        foreach ($this->routes as $route) {
            if ($route->match($this->path)) {
                return $route->run();
            }
        }

        echo '404 Not Found';
    }
}