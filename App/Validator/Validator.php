<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */
namespace App\Validator;

use Symfony\Component\HttpFoundation\Request;
/**
 * Description of Validator
 *
 * @author marcel
 */
interface Validator {
    //put your code here
    
    public function validate(Request $request);
}
