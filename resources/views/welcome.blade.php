<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                   Rotas Com Álias                                 
                </div>
                <div class="container">
                    <div class="rorw">
                        <div class="col-md-12">
                            <div class="col-md-12">
                            <button type="button"><a href="{{ url('/') }}">Rotas (Mapeie Suas Views)</a></button> 
                        </div>
                            <button type="button"><a href="{{ route('the_best') }}">Utilizando um ALIAS para minhas ROTAS</a></button> 
                        </div>
                        <div class="col-md-12">
                            <button type="button"><a href="{{ url('medicos') }}">Passando Parametros pelo Controller</a></button> 
                        </div>
                    </div>
                </div>                               
            </div>
        </div>
    </body>
</html>
