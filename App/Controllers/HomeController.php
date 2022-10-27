<?php

namespace App\Controllers;

use App\Controllers\BaseController
,    App\Storage,
    Symfony\Component\HttpFoundation\Request;

class HomeController extends BaseController {

    public function index(Request $request) {
        $data = [
            'msg' => 'Bem vindo ao nosso sitema, se voce esta vendo esta mensagem o sistema esta ok'
        ];
       
        $this->dispatch($data);
    }

}
