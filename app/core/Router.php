<?php

namespace app\core;

use app\controllers\MainController;

class Router
{
    public $routeList;
    function __construct($routes)
    {
        $this->routeList = $routes;
    }

    public function serveRoute() {
        $uriParse = explode('/', trim($_SERVER['REQUEST_URI'], '/'));
        $method =  $_SERVER['REQUEST_METHOD'];

        if ($uriParse === '/users' && $_SERVER['REQUEST_METHOD'] === 'POST') {
            $userController = new UserController();
            $userController->saveUser();

    
        }

    
        if ($uriParse[0]) {
            $route = $this->routeList[$uriParse[0]];
            if ($route) {
                $controller = $route['controller'];
                $action = $route[$method];
                $controller = new $controller();
                $controller->$action();
            } else {
                $homepageController = new MainController();
                $homepageController->notFound();
            }
        } else {
            $homepageController = new MainController();
            $homepageController->homepage();
        }
    }
}


?>
