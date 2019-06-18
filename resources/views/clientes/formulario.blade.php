@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Cadastro
                        <a class="pull-right" href="{{url('clientes')}}">Listagem de Clientes</a>

                    </div>

                    <div class="card-body">



                        @if ( Session::has('mensagem_sucesso'))
                            <div class="alert alert-success">{{Session::get('mensagem_sucesso')}}</div>
                        @endif


                        @if(Request::is('*/editar'))
                            {!! Form::model($cliente, ['method'=>'PATCH', 'url' =>'clientes/'.$cliente->id]) !!}

                        @else
                            {!! Form::open(array('url' => 'clientes/salvar') ) !!}
                        @endif

                       <h2>Formulário</h2> <br>




                        {!! Form::label('nome', "Nome") !!}
                        {!! Form::input('text', 'nome', null, ['class'=> 'form-control', 'autofocus', 'placeholder'=> "Nome"]) !!}
                        <br>
                        {!! Form::label('endereco', "  Endereço") !!}
                        {!! Form::input('text', 'endereco', null, ['class'=> 'form-control', 'autofocus', 'placeholder'=> "Endereço"]) !!}
                        <br>
                        {!! Form::label('numero', "Numero") !!}
                        {!! Form::input('text', 'numero', null, ['class'=> 'form-control', 'autofocus', 'placeholder'=> "Número"]) !!}
                        <br>
                        {!! Form::submit('Salvar', ['class'=> 'btn btn-primary'] )!!}
                        {!! Form::close() !!}


                    </div>
            </div>
        </div>
    </div>
@endsection
