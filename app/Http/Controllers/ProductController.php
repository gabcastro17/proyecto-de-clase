<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        return "Show products";
    }
    public function create(){
        return "For to create a product";
    }
    public function show($idProduct){
        return "detail of a product: $idProduct";
    }
}
