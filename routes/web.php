<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/home', HomeController::class);

Route::prefix('product')->controller(ProductController::class)->group(function(){
    Route::get('/lista', 'index');
    Route::get('/create', 'create');
    Route::get('/{idProduct}', 'show');
});


