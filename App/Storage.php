<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace App;

use League\Flysystem\Filesystem, 
        League\Flysystem\Local\LocalFilesystemAdapter,
        League\Flysystem\FilesystemException;
/**
 * Description of Storage
 *
 * @author marcel
 */
class Storage {

    //put your code here
   

    
   static function getFilesystem() {
          return new Filesystem(
                new LocalFilesystemAdapter(
                        // Determine root directory
                        __DIR__ . '/../' . env('IMAGES_FOLDER')
        )); 
    }
    
   static function write($file,$content) {

        try {
            self::getFilesystem()->write($file, $content);
        } catch (FilesystemException | UnableToWriteFile $exception) {
            // handle the error
        }
    }

}
