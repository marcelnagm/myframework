<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace App\Validator;

use App\Validator\Validator,
    Symfony\Component\HttpFoundation\Request

;

/**
 * Description of ImageValidator
 *
 * @author marcel
 */
class ImageValidator implements Validator {

    //put your code here
    private $rules;

    public function __construct() {
        $this->rules = ['image' => 'image/'];
//        $this->rules = $rules;
    }

    public function validate(Request $request) {

        $data = array();
        
        
//        \Symfony\Component\HttpFoundation\File\UploadedFile::getMaxFilesize();
        foreach ($this->rules as $rule => $type) {
//             \App\Debuger::dd($rule );
//             \App\Debuger::dd($request->files->get($rule)->guessClientExtension());
            if (isset($rule) && $rule != '' &&  $request->files->has($rule))
              
                if ($request->files->get($rule) && !str_contains($request->files->get($rule)->getMimeType(), $type))
                    throw new Exception('Image not compactible');
                else
                    $data[] = $request->files->get($rule);
        }



        return $data;
    }

}
