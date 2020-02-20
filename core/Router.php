<?php

class Router
{
    protected $routes = [
        'GET' => [],
        'POST' => []
    ];

    public static function load($file)
    {
        # code...
        $router = new static;

        require $file;

        return $router;
    }

    // public function define($routes)
    // {
    //     $this->routes = $routes;
    // }

    public function get($uri, $action)
    {
        $this->routes['GET'][$uri] = $action;
    }

    public function post($uri, $action)
    {
        $this->routes['POST'][$uri] = $action;
    }

    public function direct($uri, $requestType)
    {
        if(array_key_exists($uri, $this->routes[$requestType])){
            return $this->routes[$requestType][$uri];
        }

        throw new Exception('No route defined for this URI.');
    }
}