<?php


use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule;
$capsule->addConnection([
   "driver" => "mysql",
   "host" =>env('DB_HOST'),
   "database" => env('DB_DATABASE'),
   "username" => env('DB_USER'),
   "password" => env('DB_PASS')
]);
$capsule->setAsGlobal();
$capsule->bootEloquent();
