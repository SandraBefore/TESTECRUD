@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Clientes
                    <a class="pull-right" href="{{url('clientes/novo')}}">Novo Cliente</a>

                    </div>

                    <div class="card-body">
                        Listagem de Clientes

                        <table class = 'table'>

                            <th> Nome</th>
                            <th>Endereço</th>
                            <th>Numero</th>
                            <th>Ações</th>

                            <tbody>
                                @foreach($clientes as $cliente)
                                    <tr>
                                        <td>{{$cliente->nome}}</td>
                                        <td>{{$cliente->endereco}}</td>
                                        <td>{{$cliente->numero}}</td>
                                        <td>
                                            <a href="/clientes/{{$cliente->id}}/editar" class="btn btn-dark btn-sm">Editar</a>

                                            {!! Form::open(['method'=>'delete', 'url'=> '/clientes/'.$cliente->id.'/excluir']) !!}
                                            <button type="submit" class="btn btn-dark btn-sm">Excluir</button>
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
