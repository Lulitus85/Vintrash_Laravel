<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;

class CategoryController extends Controller
{
    public function show($id){
        $id = Category::find($id);
        return view('categories.show')->with('categoria',$id);
    }
}
