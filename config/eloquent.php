<?php


use Illuminate\Database\Capsule\Manager as Capsule;


$capsule = new Capsule;
$capsule->addConnection([
   "driver" => "mysql",
   "host" =>"127.0.0.1",
   "database" => "eleicoes",
   "username" => "phpmyadmin",
   "password" => "123"
]);
$capsule->setAsGlobal();
$capsule->bootEloquent();

echo 'eee';