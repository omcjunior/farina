<!doctype html>

<html lang="pt-br">

<head>
    <title>{{ config('app.name', 'Laravel') }}</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    {{-- <meta name="csrf-token" content="{{ csrf_token() }}"> --}}

    <meta name="keywords" content="ensino, aprovação, aprovados, aprovações, aprova, vestibular, medicina, direito, engenharia, escola">
    <meta name="description" content="Desenvolver e proliferar saberes com o objetivo de contribuir com a formação de pessoas.">
    <meta name="author" content="Osvaldo Moreira">
    <meta name="robots" content="index,follow">

    <link rel="shortcut icon" href="./favicon.ico">
    <link rel="apple-touch-icon image_src" href="./apple-touch-icon.png">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="js/main.js"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body>
    <div class="wrapper">
        <header id="header--main">
            <div id="header--wrap--menu" class="crop width--calc">
                <div id="box--logomarca">
                    <a href="#">
                        <img class="logo--header" src="imgs/structor/logomarca.png" alt="Farina Sistema de Ensino">
                    </a>
                </div>
                <div id="box--main--menu">
                    <ul class="main--menu">
                        <li><a href="#" alt="Página Inicial">Home</a></li>
                        <li><a href="#" alt="Sobre Nós">Sobre Nós</a></li>
                        <li><a href="#" alt="Depoimentos">Depoimentos</a></li>
                        <li><a href="#" alt="Fotos">Fotos</a></li>
                        <li><a href="#" alt="Blog">Blog</a></li>
                        <li><a href="#" alt="Portifólio">Portifólio</a></li>
                        <li><a href="#" alt="Contato">Contato</a></li>
                    </ul>
                </div>
                <!-- <div id="box--social">
                    <ul>
                        <li><a href="#"><span class="fab fa-facebook-square fa-1x"></span></a></li>
                        <li><a href="#"><span class="fab fa-instagram fa-1x"></span></a></li>
                        <li><a href="#"><span class="fab fa-twitter-square fa-1x"></span></a></li>
                        <li><a href="3"><span class="fas fa-globe-americas fa-1x"></span></a></li>
                    </ul>
                </div> -->
                <div class="button--menu">
                    <i class="fas fa-bars fa-2x color-white"></i>
                    <!-- <i class="fas fa-times fa-2x color-white"></i> -->
                </div>
            </div>
        </header>

        <main class="py-4">
            @yield('content')
        </main>

        <footer id="footer--main">
            
            <span class="fone">(65) 3628-3033<span>
            <span class="fone">(65) 99958-7617<span>
            <address>Miguel Sutil, 1695 – Jardim Guanabara, Cuiabá – MT, 78010-500 matricula@escoladofarina.com.br</address>
            <div id="box--social">
                <ul>
                    <li><a href="#"><span class="fab fa-facebook-square fa-1x"></span></a></li>
                    <li><a href="#"><span class="fab fa-instagram fa-1x"></span></a></li>
                    <li><a href="#"><span class="fab fa-twitter-square fa-1x"></span></a></li>
                    <li><a href="3"><span class="fas fa-globe-americas fa-1x"></span></a></li>
                </ul>
            </div>

            IMG
            <p>Copyright - Todos os Direitos a Farias Sistema de Ensino</p>
        </footer>
    </div>
</body>

</html>