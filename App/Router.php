<?php

namespace App;

use App\Controller\HomeController;
use App\Controller\BaseController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class Router {

    private $routes;

    public function __construct() {
        $this->routes = include('Routes/routes.php');
    }

    public function resolve(Request $request) {
//        echo 'in';
//        Debuger::dd($this->routes);
        foreach ($this->routes as $route => $controller) {
            $route_ = explode('@', $route);
            if (strtoupper($route_[0]) == $request->getMethod()) {
                if ($route_[1] == $request->getPathInfo()) {
//                    echo $route;
                    return $this->call($controller, $request);
                }
            }
        }
        die('Rota nao encontrada');
    }

    function call($controller, $request) {
        $actions = explode('@', $controller);

//     new HomeController()->index();
        $control = new $actions[0]();
        $method = $actions[1];
        return $control->$method($request);
    }

}
