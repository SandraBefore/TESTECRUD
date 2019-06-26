<?php

namespace App\Http\Controllers;

use App\Cliente;
use App\Compra;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class ComprasController extends Controller
{

    //Listagem
    public function listaCompras($id)
    {
      $cliente = cliente::findOrFail($id);
      $compras = $cliente->compras()->get();

        return view('compras.vendas', ['cliente'=>$cliente], ['compras'=>$compras]);
    }
    //salvar
    public function comprar(){

        return view('compras.formCompras');
    }


    public function salvarCompras(Request $request){

        $id = $request -> input('cliente_id');
        Compra::inserir($request);

        Session::flash('mensagem_sucesso', 'Compra cadastrada com Sucesso!');

        return \Redirect::to('clientes/'.$id.'/vendas');
    }

    //excluir
    public function excluir($idCompras){

        $compra = Compra::findOrFail($idCompras);
        $cliente_id = $compra['cliente_id'];

        Compra::excluir($compra);


        Session::flash('mensagem_sucesso', 'Compra ecxluida com Sucesso!');

        return \Redirect::to('clientes/'.$cliente_id.'/vendas');

    }
}
