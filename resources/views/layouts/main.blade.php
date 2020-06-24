<!DOCTYPE HTML>
<html>
<head>
    <link rel="shortcut icon" href="{{'images/untitled.ico'}}">
    <title>OlavDev</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="{{asset('css/main.css')}}" />
    <noscript><link rel="stylesheet" href="{{asset('css/noscript.css')}}" /></noscript>
</head>
<body class="is-preload">

<!-- Page Wrapper -->

<!-- Header -->
<div id="page-wrapper">

    <!-- Header -->
    <header id="header">
        <h1><a href="{{route('inicio')}}">OlavDev</a></h1>
        <nav>
            <a href="#menu">Menu</a>
        </nav>
    </header>

    <!-- Menu -->
    <nav id="menu">
        <div class="inner">
            <h2>Menu</h2>
            <ul class="links">
                <li><a href="{{route('inicio')}}">Inicio</a></li>
                <li><a href="{{('portfolio')}}">Portafolio</a></li>
                <li><a href="#">Preguntas Frequentes</a></li>
            </ul>
            <a href="#" class="close">Close</a>
        </div>
    </nav>
    @yield('content')

    <section id="footer">
        <div class="inner">
            <ul class="copyright">
                <a href="#"><li class="icon solid fa-envelope"></li></a>
                <a href="#" ><li class="icon brands fa-instagram"></li></a>
                <li>Diseño y desarrollo: Octavio Lara</li>
            </ul>
        </div>
    </section>
</div>

<!-- Scripts -->
<script src="{{'/js/jquery.min.js'}}"></script>
<script src="{{'/js/jquery.scrollex.min.js'}}"></script>
<script src="{{'js/browser.min.js'}}"></script>
<script src="{{'js/breakpoints.min.js'}}"></script>
<script src="{{'js/util.js'}}"></script>
<script src="{{'js/main.js'}}"></script>
<script src="{{('/js/app.js')}}"></script>

</body>

</html>
