<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('main');

Auth::routes();

Route::get('/home', function () {return view('home');})->name('home');

Route::get('/wheretofind', function () {return view('wheretofind');})->name('wheretofind');

Route::get('/catalog', '\App\Http\Controllers\BaseController@products')->name('catalog');

Route::get('/aboutus', '\App\Http\Controllers\BaseController@slider')->name('aboutus');

Route::get('/catalog/{id}', [\App\Http\Controllers\BaseController::class,'singlproduct']);

Route::get('/catalog/{add?}',[App\Http\Controllers\Controller\Group::class,'Groups'])->name('catalog');

Route::get('/test',[Product::class,"bascets"])->name('test');

Route::get('/test/{id}',[Product::class,"products"]);


