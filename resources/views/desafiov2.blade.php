@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Versao Vue js - CEFIS</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="links">
                        
                        <a href="home">Home</a>
                    </div>

                    
                    <div class="links">
                        <br>
                  
                    <div class="panel-body">
                       <br>
                          <img align="center" src="../img/logo-cefis-ebooks.png"/>
                    </div>
                    <br>
                    <desafio></desafio>
                    <br>
                    
                </div>
                </div>
                

                
            </div>
        </div>
    </div>
</div>


@endsection
