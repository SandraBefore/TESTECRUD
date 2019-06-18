@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (!Auth::guest())
                        <div class="alert alert-success" role="alert">

                            você está logado!
                            {{ session('status') }}
                        </div>
                    @else
                        Faça o Login ou Registre-se.
                    @endif
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
