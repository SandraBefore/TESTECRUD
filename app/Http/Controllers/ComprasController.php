<?php

namespace App\Http\Controllers;

use App\Cliente;
use App\Compra;
use Illuminate\Http\Request;

class ComprasController extends Controller
{
    function vendas($id)
    {


        $cliente = cliente::findOrFail($id);
        $compras = Compra::get();



        return view('compras.vendas', ['cliente'=>$cliente], ['compras'=>$compras]);
    }

    function comprar($id){
        $cliente = Cliente::findOrFail($id);
        return view('compras.formCompras', ['cliente'=>$cliente]);
    }


    function salvar(Request $request){
        $compras= new Compra();

        $compras = $compras->create($request->all());

        return redirect::to('clientes/{cliente}/vendas');
    }
}
