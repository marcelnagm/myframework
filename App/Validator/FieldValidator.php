<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace App\Validator;

 use App\Validator\Validator,
    Symfony\Component\HttpFoundation\Request;
/**
 * Description of FieldValidator
 *
 * @author marcel
 */
class FieldValidator implements Validator {
    //put your code here
    
    private $rules;
    public function __construct($rules) {
        $this->rules = $rules;
    }
    
    public function validate(Request $request) {
         $data = array();
        
        
//        \Symfony\Component\HttpFoundation\File\UploadedFile::getMaxFilesize();
        foreach ($this->rules as $rule => $type) {
//             \App\Debuger::dd($rule );
//             \App\Debuger::dd($request->files->get($rule)->guessClientExtension());
            if (isset($rule) && $rule != '' &&  $request->get($rule))
              
                if ($type == 'required' && $request->get($rule) == null)
                    throw new Exception("Field $rule required");
                else
                    $data[$rule] = $request->get($rule);
        }



        return $data;
    }

}
