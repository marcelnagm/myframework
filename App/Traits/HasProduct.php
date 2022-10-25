<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace App\Traits;

use App\Models\Product;

/**
 * Description of HasProduct
 *
 * @author marcel
 */
trait HasProduct {
    //put your code here
       function product() {
        return Product::find($this->product_id);
    }
}
