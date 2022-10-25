<?php

namespace App\Controllers;

use App\Controllers\BaseController,
    App\Controllers\CRUDController
,    App\Models\Category,
    Symfony\Component\HttpFoundation\Request;

class CategoryController extends CRUDController {

    protected $model = 'App\Models\Category';

}
