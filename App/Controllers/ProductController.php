<?php

namespace App\Controllers;

use Symfony\Component\HttpFoundation\Request;
use App\Controllers\BaseController,
    App\Models\Product;

class ProductController extends BaseController {

    public function index(Request $request) {

        $data['total'] = Product::count();
        $data['page'] = $request->get('page', 1);
        $data['pages'] = ceil(Product::count() / Product::$onpage);
        $data['product'] = Product::get()->skip(Product::$onpage * ($request->get('page', 1) - 1))->take(Product::$onpage);

        return $this->dispatch($data);
    }

    public function store(Request $request) {


        foreach (array_keys(Product::$rules) as $field) {
            $data[$field] = $request->get($field);
        }


        $p = Product::create($data);

        return $this->dispatch($p);
    }

    public function update(Request $request) {
        echo $request->get('id');

        $p = Product::find($request->get('id'));
        if ($p == null)
            return $this->dispatch(['nao encontrado']);
        
        foreach (array_keys(Product::$rules) as $field) {
            $data[$field] = $request->get($field);
        }


        $p->update($data);

        return $this->dispatch($p);
    }

    public function delete(Request $request) {
        echo $request->get('id');

        $p = Product::find($request->get('id'));

        if ($p == null)
            return $this->dispatch(['nao encontrado']);
        $p->delete();

        return $this->dispatch($p);
    }

}
