<?php

namespace App\Http\Controllers;

use App\cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class ClientesController extends Controller
{
    function index(){
        $clientes= cliente::get();


        return view('clientes.lista', ['clientes' => $clientes]);
    }

    function novo(){
        return view('clientes.formulario');
    }

    function salvar(request $request){

        $cliente = new cliente();

        $cliente = $cliente->create ($request->all());

        Session::flash('mensagem_sucesso', 'Cliente Cadastrado com sucesso!');

        return Redirect::to('clientes/novo');
    }
    function editar($id){

        $cliente = cliente::findorFail($id);
        return view('clientes.formulario', ['cliente'=>$cliente]);
    }



    function atualizar($id, Request $request){

        $cliente = cliente::findorFail($id);
        $cliente->update($request->all());

        Session::flash('mensagem_sucesso', 'Cliente Atualizado com sucesso!');

        return Redirect::to('clientes/'.$cliente->id.'/editar');
    }
    function excluir($id)
    {
        $cliente = cliente::findOrFail($id);

        $cliente->delete();

        Session::flash('mensagem_sucesso', 'Cliente excluído com sucesso!');

        return Redirect::to('clientes/');
    }

}
