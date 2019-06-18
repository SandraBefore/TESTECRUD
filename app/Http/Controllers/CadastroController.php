<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CadastroController extends Controller
{
    public function cadastro()
    {
        return view('form');
    }

    public  function inicio(){
        return view ('index');

    }
    public function listar(){
        return view('listar');
    }

    public function salvar(){
        return view('mensagem');
    }

}
