<?php

namespace App;

use App\Controller\HomeController;
use App\Controller\BaseController;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
class Router{
    
    private $routes;
    
    public function __construct() {
     $this->routes = include('Routes/routes.php');       
    }
    
    
    public function resolve(Request $request) {
//        echo 'in';
//        Debuger::dd($this->routes);
        foreach ($this->routes as $route => $controller){
            if($route == $request->getPathInfo()){
                
                echo $route;
               return  $this->call($controller);
            }
        }
        die('Rota nao encontrada');
    }
    
    public function call($controller) {
     $actions = explode('@', $controller) ;
     
//     new HomeController()->index();
     $control = new $actions[0]();
     $method = $actions[1];
    return  $control->$method();

    }
    
}