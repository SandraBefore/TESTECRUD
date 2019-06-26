<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable = ['nome', 'endereco', 'numero'];

    public static function atualizar($id, $request){

        $cliente = cliente::findorFail($id);
        $cliente->update($request->all());

    }

    public static function excluir($id){

        $cliente = cliente::findOrFail($id);
        $cliente->delete();
    }

    public static function inserir($request){

        $cliente = new cliente();
        $cliente = $cliente->create ($request->all());

    }
    //define relacionamento
    public function compras(){

        return $this -> hasMany(Compra::class);
    }

}
