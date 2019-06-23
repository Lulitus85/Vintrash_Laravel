<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;

class CategoryController extends Controller
{
    public function create()
    {
        $categorias = Category::all();
        return view('category.create')->with('categorias', $categorias);
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

        $photo = $request->file('photo')->store('categorias', 'public');
        
        $categoria = new Category($request->all());

        $categoria->photo = $photo;

        $categoria->save();

        return redirect('/category/create');
    }
}
