<?php 
 ini_set('display_errors', 1);

require '../vendor/autoload.php';



foreach (glob("../config/*.php") as $filename)
{
    
    require $filename;
}

use App\Kernel;

Kernel::start();