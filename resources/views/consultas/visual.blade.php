<html xmlns:v-on="http://www.w3.org/1999/xhtml">
    <head>
        <title>Visual</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <link rel="stylesheet" href="{{asset('/css/visual/main.css')}}" />
        <noscript><link rel="stylesheet" href="{{asset('/css/visual/noscript.css')}}" /></noscript>
    </head>
    <body class="is-preload">
    <div id="demo">
        <section id="header" class="cabecera">
            <!-- Header -->
            <header class="sticky-top">
                <h1>Olara</h1>
                <p>Desarrollor web</p>
            </header>
            <footer>
                <a href="#cotiza" class="button style2 scrolly">Cotiza</a>
            </footer>
        </section>
        <!-- Banner -->
        <section id="banner">
            <header>
                <h2>Desarrollo y Diseño Web</h2>
            </header>
            <p>
                "En los proximos 5 años van a haber dos tipos de negocios, los que esten en internet y los que no existan"<br>
                - Bill Gates -
            </p>
            <footer>
                <a href="{{('diseno/#Portfolio')}}" class="button style2 scrolly">Portafolios</a>
            </footer>
        </section>

        <!-- Feature 1 -->
        <a href="{{('diseno')}}">
            <article id="first" class="container box style1 right" data-aos="fade-down" data-aos-duration="1000">
                <a href="{{('diseno')}}" class="image fit"><img src="{{asset('images/web.jpg')}}" alt="" /></a>
                <div class="inner">
                    <header>
                        <h2>
                            <a href="{{('diseno')}}">Diseño Adaptativo</a>
                        </h2>
                    </header>
                    <p align="justify">
                        El diseño adaptativo de una página web permite la fácil adaptación de la misma a distintos formatos de pantalla bien sea
                        una computadora, una tableta o un telefono el resultado debería ser esteticamente agradable
                    </p>
                </div>
            </article>
        </a>


        <!-- Feature 2 -->
        <a href="{{('diseno#/Desarrollo')}}">
            <article class="container box style1 left" data-aos="fade-down" data-aos-duration="1000">
                <a href="{{('diseno#/Desarrollo')}}" class="image fit"><img src="{{asset('images/coding.jpg')}}" alt="" /></a>
                <div class="inner">
                    <header>
                        <h2>
                            <a href="{{('diseno#/Desarrollo')}}">Desarrollo intuitivo</a>
                        </h2>
                    </header>
                    <p align="justify">
                        La parte programatica de la página va a dictaminar las funciones que esta sea capaz de desempeñar.
                    </p>
                </div>
            </article>
        </a>
        <!-- Portfolio -->

        <a href="{{('diseno#/Despliegue')}}">
            <article class="container box" data-aos="fade-down" data-aos-duration="1000">
                <section id="banner1">
                    <header>
                        <h2>Hosting y mantenimiento</h2>
                    </header>
                    <p>
                        Despues de concretar tu diseño, solo relajate y maneja los aspectos cruciales de tu página, como
                        cotizaciones, compras y actualizaciones que desees hacer.<br>
                        Nos encargamos de conseguir el mejor servicio de hosting y dominio para tu emprendimiento.
                    </p>
                    <footer>
                        <a href="{{('diseno#/Despliegue')}}" class="button style2">¿Que es hosting?</a>
                    </footer>
                </section>
            </article>
        </a>

        <!-- Contact -->
        <article id="cotiza" class="container box style3" data-aos="fade-down" data-aos-duration="1000">
            <header>
                <h2>Empieza ahora</h2>
                <p>
                    Impulsa tu emprendimiento cotizando hoy.
                </p>
            </header>
            <form method="post" action="/consultas">
                @csrf
                <div class="row gtr-50">
                    <div class="col-6 col-12-mobile"><input type="text" class="text" name="nombre" placeholder="Nombre" /></div>
                    <div class="col-6 col-12-mobile"><input type="text" class="text" name="email" placeholder="Correo" /></div>
                    <div class="col-12">
                        <textarea name="consulta" placeholder="Explica tu proyecto"></textarea>
                    </div>
                    <div class="col-12">
                        <ul class="actions">
                            <li><input type="submit" value="Enviar"/></li>
                        </ul>
                    </div>
                </div>
            </form>
        </article>
        <section id="footer">
            <ul class="icons">
                <li><a href="#footer" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
                <li><a href="#footer" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
                <li><a href="#footer" class="icon brands fa-google-plus-g"><span class="label">Google+</span></a></li>
                <li><a href="#footer" class="icon brands fa-pinterest"><span class="label">Pinterest</span></a></li>
                <li><a href="https://www.instagram.com/olvdev/?hl=es" class="icon brands fa-instagram"><span class="label">Dribbble</span></a></li>
                <li><a href="#" class="icon brands fa-linkedin-in"><span class="label">LinkedIn</span></a></li>
            </ul>
            <div class="copyright">
                <ul class="menu">
                    <li>&copy;Visual.</li>
                    <li>Diseño: Octavio Lara</li>
                </ul>
            </div>
        </section>

    <!-- Scripts -->
    <script src="{{asset('js/visual/jquery.min.js')}}"></script>
    <script src="{{asset('js/visual/jquery.scrolly.min.js')}}"></script>
    <script src="{{asset('js/visual/jquery.poptrox.min.js')}}"></script>
    <script src="{{asset('js/visual/browser.min.js')}}"></script>
    <script src="{{asset('js/visual/breakpoints.min.js')}}"></script>
    <script src="{{asset('js/visual/util.js')}}"></script>
    <script src="{{asset('js/visual/main.js')}}"></script>
    <script src="{{('/js/app.js')}}"></script>

    </div>
    </body>
</html>
