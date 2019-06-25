<?php

namespace App\Http\Controllers;

use App\Cliente;
use App\Compra;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class ComprasController extends Controller
{


    public function listaCompras($id)
    {
      $cliente = cliente::findOrFail($id);
//        $compras = $cliente->compras()->get();
        $compras = Compra::get();
        return view('compras.vendas', ['cliente'=>$cliente], ['compras'=>$compras]);
    }

    public function comprar($id){
        $cliente = cliente::findOrFail($id);
        return view('compras.formCompras');
    }


    public function salvarCompras(Request $request){


       //Compra::inserir($request);

        return view('welcome');
    }
}
