<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
  
    public function index(){
        $listaDeProductos = product::all();
        //($listaDeProductos);
        return view('product.index', compact('listaDeProductos'));
    }
    public function create(){
        return view('product.create');
    }
    public function show($idProduct){
        return view('product.show', compact('idProduct'));
    }
}
