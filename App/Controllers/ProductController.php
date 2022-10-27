<?php

namespace App\Controllers;

use Symfony\Component\HttpFoundation\Request;
use App\Controllers\CRUDController,
    App\Storage,
    App\Validator\ImageValidator,
    App\Models\Product;

class ProductController extends CRUDController {

    protected $model = 'App\Models\Product';

    public function store(Request $request) {
        $p = parent::persist($request);

        
        $validator = new ImageValidator()?? $request->files->has('image') ;
//          \App\Debuger::dd($validator);
        $files =  $validator->validate($request) ??$request->files->has('image');
//        \App\Debuger::dd($files);

            foreach ($files as $file)
                Storage::write("$p->id/image." . $file->getClientOriginalExtension(), file_get_contents($file->getRealPath()));
        return $this->dispatch($p->toArray());
    }

}
