@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">

                      Cliente: {{$cliente->nome}}.

                        <a class="float-right" href="/compras/{{$cliente->id}}/comprar">Nova Compra</a>

                    </div>

                    <div class="card-body">
                        @if ( Session::has('mensagem_sucesso'))
                            <div class="alert alert-success">{{Session::get('mensagem_sucesso')}}</div>
                        @endif

                        <table class="table">
                            <th>Endereço</th>
                            <th>Numero</th>
                            <th>Ações</th>

                            <tbody>
                                <tr>
                                    <td>{{$cliente->endereco}}</td>
                                    <td>{{$cliente->numero}}</td>
                                    <td>
                                        <a href="/clientes/{{$cliente->id}}/editar" class="btn btn-dark btn-sm">Editar Cliente</a> <br>

                                        {!! Form::open(['method'=>'delete', 'url'=> '/clientes/'.$cliente->id.'/excluir']) !!}
                                        <button type="submit" class="btn btn-dark btn-sm">Excluir Cliente</button>
                                        {!! Form::close() !!}
                                    </td>
                                </tr>

                            </tbody>
                        </table>

                        <table class = 'table'>
                            <th>Id Compras</th>
                            <th>Quatidade de itens</th>
                            <th>Valor</th>
                            <th>Data da Compra</th>
                            <th>Ações</th>

                            @foreach($compras as $compra)

                            <tr>
                                <td>{{$compra->id}}</td>
                                <td>{{$compra->quantidade}}</td>
                                <td>{{$compra->valor}}</td>
                                <td>{{$compra -> created_at}}</td>
                                <td>
                                    {!! Form::open(['method'=>'delete', 'url'=> '/compras/'.$compra -> id.'/excluir']) !!}
                                    <button type="submit" class="btn btn-dark btn-sm">Excluir </button>
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                            @endforeach
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
