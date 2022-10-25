<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace App\Traits;


/**
 * Description of HasProduct
 *
 * @author marcel
 */
trait IsTraceable {
    //put your code here
      public static function boot() {
        parent::boot();
        static::creating(function ($model) {
            $user = auth()->guard('api')->user();
            if ($user != null) {
                $model->created_by = $user->id;
                $model->user_id = $user->id;
                $model->updated_by = $user->id;
            }
        });
        static::updating(function ($model) {
            $user = auth()->guard('api')->user();
            if ($user != null) {
                $model->updated_by = $user->id;
            }
        });
    }
}
