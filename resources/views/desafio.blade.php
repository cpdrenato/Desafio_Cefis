<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Desafio</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Biblioteca jquery css -renato -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
          crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css"/>
    
    <link href="{{ asset('css/index.css') }}" rel="stylesheet">

        
    </head>
    <body>
        <br>
        <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Desafio 2018</div>

                    <div class="links">
                        
                        <a href="home">Home</a>
                    </div>
                    <div class="panel-body">
                       <br>
                          <img align="center" src="../img/logo-cefis-ebooks.png"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <div class="carousel">
                <div class="cursos">

                </div>
                <a id="cursos-prev" class="left carousel-control" role="button">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Prox</span>
                </a>
                <a id="cursos-next" class="right carousel-control" role="button">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Ant</span>
                </a>
            </div>
        

        <!--biblioteca js-->
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"
            integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
            crossorigin="anonymous"></script>
    
    <script src="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>
    <script src="{{ asset('js/index.js') }}"></script>
    <desafio></desafio>

    </body>
</html>
