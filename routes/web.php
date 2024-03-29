<?php

use App\Models\Product;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BaseController;
use App\Http\Controllers\BascetController;
use App\Http\Controllers\Controller\Group;

Route::get('/', function () {
    return view('aboutus');
})->name('main');

Auth::routes();

Route::get('/wheretofind', function () {return view('wheretofind');})->name('wheretofind');

Route::get('/', '\App\Http\Controllers\BaseController@slider')->name('aboutus');

Route::get('/catalog', '\App\Http\Controllers\BaseController@products')->name('catalog');

Route::get('/catalog/{id}/{jik}',[BaseController::class,'products']);

Route::get('/catalog/filter/{id}',[BaseController::class,'bascets'])->name('sorting');

Route::get('/catalog/{id}', [\App\Http\Controllers\BaseController::class,'singlproduct']);

Route::get('/bascet',[BascetController::class,'bascets'])->name('bascet');

Route::get('/bascet/{id}',[BascetController::class,'products']);

Route::get('/catalog/sort/{tip?}/{sort?}',[\App\Http\Controllers\BaseController::class, 'sortItem']);

Route::get('/bascet/{id?}/delete',[BascetController::class, 'deletebascet']);

Route::get('/admin', [\App\Http\Controllers\BascetController::class, 'addstore'])->name('addstore');

Route::post('/products', [\App\Http\Controllers\BascetController::class, 'store'])->name('add-form');

Route::post('cart/update/{id}',[BascetController::class,'update'])->name('cartUpadate');

