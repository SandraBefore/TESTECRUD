<?php

namespace App\Http\Controllers;

use App\cliente;
use Illuminate\Support\Facades\Response;
use Symfony\Component\HttpFoundation\Response as HttpResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class ClientesController extends Controller
{
    function lista()
    {
        $clientes = cliente::get();
        return Response::json(['clientes' => $clientes], HttpResponse::HTTP_OK);
    }
/////////////////////////////
    function novo()
    {
        return view('clientes.formulario');
    }
///////////////////////////////////////////
    function salvar(request $request)
    {
        cliente::inserir($request);
        Session::flash('mensagem_sucesso', 'Cliente Cadastrado com sucesso!');
        return Redirect::to('clientes/novo');
    }

    function editar($id)
    {
        $cliente = cliente::findorFail($id);
        return view('clientes.formulario', ['cliente' => $cliente]);
    }

    function atualizar($id, Request $request)
    {

        $cliente = cliente::findOrfail($id);
        $cliente->atualizar($id, $request);

        Session::flash('mensagem_sucesso', 'Cliente Atualizado com sucesso!');
        return Redirect::to('clientes/' . $id . '/editar');
    }

    function excluir($id)
    {
        $cliente = cliente::findOrFail($id);
        $cliente->excluir($id);

        Session::flash('mensagem_sucesso', 'Cliente excluído com sucesso!');
        return Redirect::to('clientes/');
    }


}
