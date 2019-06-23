<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subcategory;
use App\Category;

class SubcategoryController extends Controller
{
    public function create()
    {
        $categorias = Category::all();
        return view('subcategory.create')->with('categorias', $categorias);
    }

    public function store(Request $request)
    {
        $reglas = [
            'name' => 'required',
        ];

        $mensaje = [
            'El campo :attribute es obligatorio'
        ];

        $this->validate($request, $reglas, $mensaje);
        
        $subcategoria = new Subcategory($request->all());

        $subcategoria->save();

        return redirect('/subcategory/create');
    }

}
