<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Http\Requests\ProductRequest;

class ProductController extends Controller
{
    public function index()
    {
        $listaDeProductos = Product::all();

        return view(
            'product.index',
            compact('listaDeProductos')
        );
    }

    public function create()
    {
        $categorias = Category::all();

        return view(
            'product.create',
            compact('categorias')
        );
    }

    public function store(ProductRequest $request)
    {
        Product::create($request->validated());

        return redirect('/product/index');
    }

    public function show($idProduct)
    {
        $producto = Product::findOrFail($idProduct);

        return view(
            'product.show',
            compact('producto')
    );
    }
    public function edit($idProduct)
{
    $producto = Product::findOrFail($idProduct);

    $categorias = Category::all();

    return view(
        'product.edit',
        compact('producto', 'categorias')
    );
}
public function update(ProductRequest $request, $idProduct)
{
    $producto = Product::findOrFail($idProduct);

    $producto->update($request->validated());

    return redirect('/product/'.$idProduct);
}

public function destroy($idProduct)
{
    $producto = Product::findOrFail($idProduct);

    $producto->delete();

    return redirect('/product/index');
}
}
