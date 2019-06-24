<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;

class CategoryController extends Controller
{

    public function index()
    {
        $categorias = Category::all();
        return view('categorias.categorias')->with('categorias',$categorias);
    }

    public function show($id)
    {
        $categoria = Category::find($id);
        return view('categorias.showProd')->with('categoria',$categoria);
    }
}