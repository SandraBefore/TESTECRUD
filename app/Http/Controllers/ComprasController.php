<?php

namespace App\Http\Controllers;

use App\Cliente;
use App\Compra;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Response;
use Symfony\Component\HttpFoundation\Response as HttpResponse;


class ComprasController extends Controller
{

    //Listagem
    public function listaCompras($id)
    {
      $cliente = cliente::findOrFail($id);
      $compras = $cliente->compras()->get();

      return Response::json(['compras'=>$compras], HttpResponse::HTTP_OK);
    }
    //salvar
    // public function comprar(){

    //     return view('compras.formCompras');
    // }


    public function salvarCompras(Request $request){

        $id = $request -> input('cliente_id');

        //mantive o método estático para não precisar criar uma instacia na controller e deixar tudo no Model
        Compra::inserir($request);

        Session::flash('mensagem_sucesso', 'Compra cadastrada com Sucesso!');

        return \Redirect::to('clientes/'.$id.'/vendas');
    }

    //excluir
    public function excluir($idCompras){

        $compra = Compra::findOrFail($idCompras);
        $cliente_id = $compra['cliente_id'];

        $compra -> excluir($compra);


        Session::flash('mensagem_sucesso', 'Compra ecxluida com Sucesso!');

        return \Redirect::to('clientes/'.$cliente_id.'/vendas');

    }
}
