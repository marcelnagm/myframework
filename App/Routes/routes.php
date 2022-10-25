<?php

return [
//    'path' => 'Controller',
    'get@/index' => 'App\Controllers\HomeController@index',
    'get@/product' => 'App\Controllers\ProductController@index',
    'post@/product/add' => 'App\Controllers\ProductController@store',
    'put@/product/update' => 'App\Controllers\ProductController@update',
    'delete@/product/delete' => 'App\Controllers\ProductController@delete',
    
];
