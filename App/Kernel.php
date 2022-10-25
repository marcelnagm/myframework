<?php

namespace App;

use App\Router;
use Symfony\Component\HttpFoundation\Request;

class Kernel {

    static function start() {
        $request = Request::createFromGlobals();

        $router = new Router();
       return $router->resolve($request);
    }

}
