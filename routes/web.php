<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/home', HomeController::class);
Route::get('/dashboard', function () {
    return redirect('/home');
})->middleware('auth')->name('dashboard');

Route::prefix('product')->controller(ProductController::class)->group(function(){

    Route::get('/index', 'index')->middleware('auth');

    Route::get('/create', 'create')->middleware('auth');

    Route::post('/', 'store')->middleware('auth');

    Route::get('/{idProduct}/edit', 'edit')->middleware('auth');

    Route::put('/{idProduct}', 'update')->middleware('auth');

    Route::delete('/{idProduct}', 'destroy')->middleware('auth');

    Route::get('/{idProduct}', 'show')->middleware('auth');

});

require __DIR__.'/auth.php';