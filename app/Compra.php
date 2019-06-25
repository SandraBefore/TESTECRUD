<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    protected $fillable = ['idClientes', 'quantidade', 'valor'];

//    public static function inserir( $request){
//
//        $cliente = cliente::findOrFail($id);
//
//        $cliente->compras()->save($request->all());
//    }
}
