<?php

namespace App\Controllers;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class BaseController {

    function dispatch($data) {
        echo Response::create(json_encode($data));
    }

    function view($view) {
        echo readfile(__DIR__.'/../../src/assets/'.$view);
    }

}
