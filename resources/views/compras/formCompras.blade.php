@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Cadastro de compra
                        <a class="float-right" href="{{url('clientes')}}">Listagem de Clientes</a>

                    </div>

                    <div class="card-body">



                        @if ( Session::has('mensagem_sucesso'))
                            <div class="alert alert-success">{{Session::get('mensagem_sucesso')}}</div>
                        @endif


                        @if(Request::is('*/editar'))
                            {!! Form::model($cliente, ['method'=>'PATCH', 'url' =>'clientes/'.$cliente->id]) !!}

                        @else
                            {!! Form::open(array('url' => 'compras/salvarCompras') )!!}
                        @endif


                            {!! Form::label('Identificador', "identificador do Cliente") !!}
                            {!! Form::number('cliente_id', null, ['class'=> 'form-control','required', 'autofocus', 'placeholder'=> "Identificador do Cliente"]) !!}
                            <br>

                        {!! Form::label('quantidade', "Quantidade") !!}
                        {!! Form::number('quantidade', null, ['class'=> 'form-control','required', 'autofocus', 'placeholder'=> "Quantidade"]) !!}
                        <br>
                        {!! Form::label('valor', "Valor") !!}
                        {!! Form::number('valor', null, ['class'=> 'form-control','required', 'autofocus', 'placeholder'=> "Valor"]) !!}
                        <br>

                        {!! Form::submit('Salvar', ['class'=> 'btn btn-primary'] )!!}
                        {!! Form::close() !!}


                    </div>
                </div>
            </div>
        </div>
@endsection
