<?php

use App\Categoria;
use App\Cliente;
use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\ClientesController;
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

Route::get('/', function () { return view('welcome'); })->name('welcome');

Route::get('/produtos', 'ProdutosController@index')->name('produtos.index');
Route::get('/prudutos/create', 'ProdutosController@create')->name('produtos.create');
Route::post('/produtos/post', 'ProdutosController@store')->name('produtos.store');
Route::get('/produtos/show/{id}', 'ProdutosController@show')->name('produtos.show');
Route::get('produtos/edit/{id}', 'ProdutosController@edit')->name('produtos.edit');
Route::put('produtos/update/{id}', 'ProdutosController@update')->name('produtos.update');
Route::get('produtos/destroy/{id}', 'ProdutosController@destroy')->name('produtos.destroy');



Route::get('/categorias', 'CategoriasController@index')->name('categorias.index');
Route::get('/categorias/create', 'CategoriasController@create')->name('categorias.create');
Route::post('/categorias/post', 'CategoriasController@store')->name('categorias.store');
Route::get('/categorias/show/{id}', 'CategoriasController@show')->name('categorias.show');
Route::get('categorias/edit/{id}', 'CategoriasController@edit')->name('categorias.edit');
Route::put('categorias/update/{id}', 'CategoriasController@update')->name('categorias.update');
Route::get('categorias/destroy/{id}', 'CategoriasController@destroy')->name('categorias.destroy');

Route::get('/clientes', 'ClientesController@index')->name('clientes.index');
Route::get('/clientes/create', 'ClientesController@create')->name('clientes.create');
Route::post('/clientes/post', 'ClientesController@store')->name('clientes.store');
Route::get('/clientes/show/{id}', 'ClientesController@show')->name('clientes.show');
Route::get('/clientes/edit/{id}', 'ClientesController@edit')->name('clientes.edit');
Route::put('/clientes/update/{id}', 'ClientesController@update')->name('clientes.update');
Route::get('clientes/destroy/{id}', 'ClientesController@destroy')->name('clientes.destroy');
Route::get('clientes/buscaCliente', 'ClientesController@buscaCliente')->name('clientes.buscaCliente');

Route::get('/fornecedors', 'FornecedorsController@index')->name('fornecedors.index');
Route::get('/fornecedors/create', 'FornecedorsController@create')->name('fornecedors.create');
Route::post('/fornecedors/post', 'FornecedorsController@store')->name('fornecedors.store');
Route::get('/fornecedors/show/{id}', 'FornecedorsController@show')->name('fornecedors.show');
Route::get('/fornecedors/edit/{id}', 'FornecedorsController@edit')->name('fornecedors.edit');
Route::put('/fornecedors/update/{id}', 'FornecedorsController@update')->name('fornecedors.update');
Route::get('/fornecedors/destroy/{id}', 'FornecedorsController@destroy')->name('fornecedors.destroy');

Route::get('/empresas', 'EmpresasController@index')->name('empresas.index');
Route::get('/empresas/create', 'EmpresasController@create')->name('empresas.create');
Route::post('/empresas/post', 'EmpresasController@store')->name('empresas.store');
Route::get('/empresas/show/{id}', 'EmpresasController@show')->name('empresas.show');
Route::get('/empresas/edit/{id}', 'EmpresasController@edit')->name('empresas.edit');
Route::put('/empresas/update/{id}', 'EmpresasController@update')->name('empresas.update');
Route::get('/empresas/destroy/{id}', 'EmpresasController@destroy')->name('empresas.destroy');



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