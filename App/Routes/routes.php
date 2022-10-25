<?php

return [
//    'path' => 'Controller',
    'get@/index' => 'App\Controllers\HomeController@index',
    'get@/product' => 'App\Controllers\ProductController@index',
    'post@/product/add' => 'App\Controllers\ProductController@store',
    'put@/product/update' => 'App\Controllers\ProductController@update',
    'delete@/product/delete' => 'App\Controllers\ProductController@delete',
    
    'get@/category' => 'App\Controllers\CategoryController@index',
    'post@/category/add' => 'App\Controllers\CategoryController@store',
    'put@/category/update' => 'App\Controllers\CategoryController@update',
    'delete@/category/delete' => 'App\Controllers\CategoryController@delete',
    
];
