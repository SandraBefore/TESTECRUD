<?php
namespace App\Http\Controllers;

use App\cliente;
use Illuminate\Support\Facades\Response;
use Symfony\Component\HttpFoundation\Response as HttpResponse;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    function lista()
    {
        $clientes = cliente::get();
        return Response::json(['clientes' => $clientes], HttpResponse::HTTP_OK);
    }

    function salvar(request $request)
    {
//        dd($request);
        cliente::inserir($request);
        $mensagem = 'Cliente cadastrado com sucesso.';
        return Response::json(['cliente' => $mensagem], HttpResponse::HTTP_OK);
    }

    function buscaCliente($id)
    {
        $cliente = cliente::findorFail($id);
       return Response::json(['cliente' => $cliente], HttpResponse::HTTP_OK);
    }

    function atualizar($id, Request $request)
    {
        $cliente = cliente::findOrfail($id);
        $cliente->atualizar($id, $request);

        $mensagem = 'Cliente atualizado com sucesso.';
        return Response::json(['cliente' => $mensagem], HttpResponse::HTTP_OK);
    }

    function excluir($id)
    {
        $cliente = cliente::findOrFail($id);
        $cliente->excluir($id);
        $mensagem = 'Cliente cadastrado com sucesso.';
        return Response::json(['cliente' => $mensagem], HttpResponse::HTTP_OK);
    }


}
