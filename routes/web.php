<?php

use App\Categoria;
use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\ProdutosController;
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

Route::get('/', function () { return view('welcome'); });

Route::get('/produtos', 'ProdutosController@index')->name('produtos.index');
Route::get('/prudutos/create', 'ProdutosController@create')->name('produtos.create');
Route::post('/produtos/post', 'ProdutosController@store')->name('produtos.store');
// Route::get('/produtos/show/{id}', 'ProdutosController@show')->name('produtos.show');
// Route::get('produtos/edit/{id}', 'ProdutosController@edit')->name('produtos.edit');
// Route::put('produtos/update/{id}', 'ProdutosController@update')->name('produtos.update');
// Route::get('produtos/destroy/{id}', 'ProdutosController@destroy')->name('produtoss.destroy');



Route::get('/categorias', 'CategoriasController@index')->name('categorias.index');
Route::get('/categorias/create', 'CategoriasController@create')->name('categorias.create');
Route::post('/categorias/post', 'CategoriasController@store')->name('categorias.store');
Route::get('/categorias/show/{id}', 'CategoriasController@show')->name('categorias.show');
Route::get('categorias/edit/{id}', 'CategoriasController@edit')->name('categorias.edit');
Route::put('categorias/update/{id}', 'CategoriasController@update')->name('categorias.update');
Route::get('categorias/destroy/{id}', 'CategoriasController@destroy')->name('categorias.destroy');

// Route::resource('/produtos', 'ProdutosController');

// Route::resource('categorias', 'CategoriasController');

// Route::prefix('produtos')->group(function () {
//     Route::get('/', 'ProdutosController@index')->name('produtos.index');
//     Route::get('/create', 'ProdutosController@create');
//     Route::post('/store', 'ProdutosCOntroller@store');
//     Route::get('/show/{id}', 'ProdutosCOntroller@show');
//     Route::get('/edit/{id}', 'ProdutosCOntroller@edit');
//     Route::get('/update/{id}', 'ProdutosCOntroller@update');
//     Route::get('/destroy/{id}', 'ProdutosCOntroller@destroy');
// });

// Route::prefix('categorias')->group(function () {
//     Route::get('/', 'ProdutosController@index')->name('produtos.index');
//     Route::get('/create', 'ProdutosController@create');
//     Route::post('/store', 'ProdutosCOntroller@store');
//     Route::get('/show/{id}', 'ProdutosCOntroller@show');
//     Route::get('/edit/{id}', 'ProdutosCOntroller@edit');
//     Route::get('/update/{id}', 'ProdutosCOntroller@update');
//     Route::get('/destroy/{id}', 'ProdutosCOntroller@destroy');
// });