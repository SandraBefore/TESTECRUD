<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get ('clientes', 'ClientesController@lista');

// Route::get ('clientes/novo', 'ClientesController@novo');

Route::post ('clientes/salvar', 'ClientesController@salvar');

Route::get ('clientes/{cliente}/editar', 'ClientesController@buscaCliente');

//atualizar
Route::patch('clientes/{cliente}', 'ClientesController@atualizar');

Route::delete('clientes/{cliente}/excluir', 'ClientesController@excluir');

Route::get('clientes/{cliente}/vendas', 'ComprasController@listaCompras');

// Route::get('compras/{cliente}/comprar', 'ComprasController@comprar');

Route::post('compras/salvarCompras','ComprasController@salvarCompras');

Route::delete('compras/{id_compra}/excluir','ComprasController@excluir');