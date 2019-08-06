<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    protected $fillable = ['idClientes', 'quantidade', 'valor'];

    public static function inserir( $request){

        $id = $request -> input('cliente_id');

        $cliente = cliente::findOrFail($id);

        $cliente->compras()->create($request->all());
    }

    /**
     * @param $idCompras
     */
    public function excluir($compras){

        $compras -> delete();
    }
}
