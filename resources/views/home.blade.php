@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Desafio - CEFIS</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="panel-body">
                       <br>
                          <img align="center" src="../img/logo-cefis-ebooks.png"/>
                    </div>

                    Seja Bem Vindo aos nossos cursos!
                    <div class="links">
                        <br>
                    <a href="desafio">Cursos V1</a><a href="desafiov2">Cursos V2</a>
                    
                </div>
                

                
            </div>
        </div>
    </div>
</div>


@endsection
