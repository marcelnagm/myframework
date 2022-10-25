<?php

namespace App\Controllers;

use Symfony\Component\HttpFoundation\Request;
use App\Controllers\BaseController,
    App\Models\Product;

class CRUDController extends BaseController {

    protected $model = '';

    public function index(Request $request) {

        $data['total'] = $this->model::count();
        $data['page'] = $request->get('page', 1);
        $data['pages'] = ceil($this->model::count() / $this->model::$onpage);
        $data[$this->model] = $this->model::get()->skip($this->model::$onpage * ($request->get('page', 1) - 1))->take($this->model::$onpage);

        return $this->dispatch($data);
    }

    public function store(Request $request) {


        foreach (array_keys($this->model::$rules) as $field) {
            $data[$field] = $request->get($field);
        }


        $p = $this->model::create($data);

        return $this->dispatch($p);
    }

    public function show(Request $request) {


        $p = $this->model::find($request->get('id'));
        if ($p == null)
            return $this->dispatch(['nao encontrado']);



        return $this->dispatch($p);
    }

    public function update(Request $request) {


        $p = $this->model::find($request->get('id'));
        if ($p == null)
            return $this->dispatch(['nao encontrado']);

        foreach (array_keys($this->model::$rules) as $field) {
            $data[$field] = $request->get($field);
        }


        $p->update($data);

        return $this->dispatch($p);
    }

    public function delete(Request $request) {


        $p = $this->model::find($request->get('id'));

        if ($p == null)
            return $this->dispatch(['nao encontrado']);
        $p->delete();

        return $this->dispatch(['Removed: ' => $p->id]);
    }

}
