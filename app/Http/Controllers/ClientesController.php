<?php

namespace App\Http\Controllers;

use App\cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class ClientesController extends Controller
{
    ///// Listagem
    function lista(){

        $clientes= cliente::get();
        return view('clientes.lista', ['clientes' => $clientes]);
    }

    ///// Criar Novo
    function novo(){

        return view('clientes.formulario');
    }

    function salvar(request $request){

       cliente::inserir($request);
       Session::flash('mensagem_sucesso', 'Cliente Cadastrado com sucesso!');
       return Redirect::to('clientes/novo');
    }

    ///// Atualizar
    function editar($id){

        $cliente = cliente::findorFail($id);
        return view('clientes.formulario', ['cliente'=>$cliente]);
    }

    function atualizar($id, Request $request){

        cliente::atualizar($id, $request);

        Session::flash('mensagem_sucesso', 'Cliente Atualizado com sucesso!');
        return Redirect::to('clientes/'.$id.'/editar');
    }

    ///// Excluir
    function excluir($id){

        cliente::excluir($id);

        Session::flash('mensagem_sucesso', 'Cliente excluído com sucesso!');
        return Redirect::to('clientes/');
    }



}
