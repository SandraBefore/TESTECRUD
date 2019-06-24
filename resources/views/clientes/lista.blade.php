@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">

                        Listagem de Clientes

                        <a class="float-right" href="{{url('clientes/novo')}}">Novo Cliente</a>

                    </div>

                    <div class="card-body">


                        @if ( Session::has('mensagem_sucesso'))
                            <div class="alert alert-success">{{Session::get('mensagem_sucesso')}}</div>
                        @endif

                        <ul class = 'list-group'>

                            <h4>Nome</h4>


                            <ul>
                                @foreach($clientes as $cliente)
                                    <ul class ='list-group-item-action'>
                                        <td> <a href="/clientes/{{$cliente->id}}/vendas" class='list-group-item-action'>{{$cliente->nome}}</a></td>

                                    </ul>
                                @endforeach
                            </ul>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
