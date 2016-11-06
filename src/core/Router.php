<?php
Namespace App\Core;

use Exception;
use App\Core\Controller;

class Router
{
    protected $routes = [];

    public static function load($file)
    {
        $router = new static;

        require $file;

        return $router;
    }

    public function define($routes)
    {
        $this->routes = $routes;
    }

    public function direct($uri)
    {
        if (array_key_exists($uri, $this->routes)) {
            return $this->callAction($this->getController($uri), $this->getAction($uri));
        }
        return (new Controller)->notFound();
        throw new Exception('No route defined for this URI.');
    }

    public function getController($uri)
    {
        $segments = explode('@', $this->routes[$uri]);
   
        return $action = count($segments) == 2 ? $segments[0] : 'Controller';
    }

    public function getAction($uri)
    {   
        $segments = explode('@', $this->routes[$uri]);
  
        return $action = count($segments) == 2 ? $segments[1] : 'notFound';
    }

    public function callAction($controller, $action) 
    {
        if (! method_exists($controller, $action)){
            throw new Exception(
                "{$controller} non ha un'azione chiamata {$action}"
            );
        }

        return (new $controller)->$action();
    }
}
