<!doctype html>

<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="keywords" content="ensino, aprovação, aprovados, aprovações, aprova, vestibular, medicina, direito, engenharia, escola">
        <meta name="description" content="Desenvolver e proliferar saberes com o objetivo de contribuir com a formação de pessoas.">
        <meta name="author" content="Osvaldo Moreira">
        <meta name="robots" content="index,follow">

        <title>Farina Sistema de Ensino</title>
        
        <link rel="shortcut icon" href="./favicon.ico">
        <link rel="apple-touch-icon image_src" href="./apple-touch-icon.png">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,900,900i|Montserrat:400,700,800|Noto+Sans:700|Open+Sans:300,400,700,800,800i|Poppins:900" rel="stylesheet">
        
        <link rel="stylesheet" href="/css/main.css">
    </head>

    <body>
        <div class="wrapper">
            <header id="header--main">
                <div id="box--logomarca">
                    <img src="imgs/structor/logomarca.png" alt="Farina Sistema de Ensino" class="logo--header">
                </div>
            </header>

            <section id="sec--home">
                <div class="banner--home"></div>
            </section>
        </div>


        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html>
