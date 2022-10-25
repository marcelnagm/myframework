<?php
namespace App;

class Debuger{
  

    static  function dd() {
        foreach (func_get_args() as $x) {
            var_dump($x);
        }
        die;
    }


}
