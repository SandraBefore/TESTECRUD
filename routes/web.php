<?php

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
    return view( 'app');
});

Route::get('/{any?}', function (){
    return view('app');
})->where('any', '^(?!api\/)[\/\w\.-]*');

// Route::get('/home', 'HomeController@index')->name('home');

// ///////////////////////////////////////////////////////
// /// Clientes

// Auth::routes();

// Route::get ('clientes', 'ClientesController@lista');

// Route::get ('clientes/novo', 'ClientesController@novo');

// Route::post ('clientes/salvar', 'ClientesController@salvar');

// Route::get ('clientes/{cliente}/editar', 'ClientesController@editar');

// //atualizar
// Route::patch('clientes/{cliente}', 'ClientesController@atualizar');

// Route::delete('clientes/{cliente}/excluir', 'ClientesController@excluir');

// /////////////////////////////////////////////////////////
// /// Compras
// Route::get('clientes/{cliente}/vendas', 'ComprasController@listaCompras');

// Route::get('compras/{cliente}/comprar', 'ComprasController@comprar');

// Route::post('compras/salvarCompras','ComprasController@salvarCompras');

// Route::delete('compras/{id_compra}/excluir','ComprasController@excluir');

