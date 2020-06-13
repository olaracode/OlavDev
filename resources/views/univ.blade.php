<!DOCTYPE HTML>
<html>
<head>
    <title>Universidad Artificial</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="{{ asset('css/uv/main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/uv/app.css') }}" rel="stylesheet">

</head>
<body>

<!-- Header -->
<header id="header">
    <div class="inner">
        <a href="#" class="logo">U.A</a>
        <nav id="nav">
            <a href="{{ '/portfolio' }}">Inicio</a>
            <a href="#">Ingresa</a>
            <a href="#">Contacto</a>

        </nav>
        <a href="#navPanel" class="navPanelToggle"><span class="fa fa-bars"></span></a>
    </div>
</header>

<!-- Banner -->
<section id="banner">
    <h1>Universidad Artificial</h1>
</section>

<!-- One -->
<section id="one" class="wrapper">
    <div class="inner">
        <div class="flex flex-3">
            <article>
                <header>
                    <h3>Campus</h3>
                    <p>Conoce nuestras instalaciones<br>Aprende sobre nuestra filosofia<br>Campus ambiental</p>
                </header>
                <footer>
                    <a href="#" class="button special">Inactivo</a>
                </footer>
            </article>
            <article>
                <header>
                    <h3>Inscripcion</h3>
                    <p>Fechas de examenes<br>Proceso de aplicación<br>titulaciones</p>
                </header>
                <footer>
                    <a href="#" class="button special">Inactivo</a>

                </footer>
            </article>
            <article>
                <header>
                    <h3>Presupuestos</h3>
                    <p>Calcula el costo de tu carrera<br>Becas<br>Financiamientos</p>
                </header>
                <footer>
                    <a href="#" class="button special">Inactivo</a>
                </footer>
            </article>
        </div>
    </div>
</section>

<!-- Two -->
<section id="two" class="wrapper style1 special">
    <div class="inner">
        <header data-aos="fade-left">
            <a href="#"><h2>Carreras</h2></a>
        </header>
        <div class="flex flex-4">
            <div class="box person" data-aos="flip-right" data-aos-delay="50">
                <div class="image round">
                    <a href="#" class="newA">
                        <img src="images/space1.jpg" alt="Person 1" />
                    </a>
                </div>
                <a href="#" class="newA">
                    <h3><br>Ing Aeroespacial</h3>
                </a>
            </div>
            <div class="box person" data-aos="flip-right" data-aos-delay="150">
                <div class="image round">
                    <a href="#" class="newA">
                        <img src="images/robots.jpeg" style="width: 168px; height: 168px;" alt="Person 2" />
                    </a>
                </div>
                <a href="#" class="newA">
                    <h3><br>Robotica</h3>
                </a>
            </div>
            <div class="box person" data-aos="flip-right" data-aos-delay="250">
                <div class="image round">
                    <a href="#" class="newA">
                        <img src="images/coding.jpg" style="width: 168px; height: 168px;" alt="Person 2" />
                    </a>
                </div>
                <a href="#" class="newA">
                    <h3><br>Programación</h3>
                </a>
            </div>
            <div class="box person" data-aos="flip-right" data-aos-delay="350">
                <div class="image round">
                    <a href="#" class="newA">
                        <img src="images/mech.jpg" style="width: 168px; height: 168px;" alt="Person 4" />
                    </a>
                </div>
                <a href="#" class="newA">
                    <h3><br>Ing Mecanica</h3>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Three -->
<section id="three" class="wrapper special">
    <div class="inner">
        <header class="align-center" data-aos="fade-up" data-aos-delay="150">
            <h2>Laboratorios</h2>
            <p>Un ambiente donde desarrollar tus ideas</p>
        </header>
        <div class="flex flex-2" >
            <article data-aos-delay="300" data-aos="fade-up">
                <div class="image fit">
                    <img src="images/lab1.png" style="max-width: 576px; height: auto;" alt="Pic 01" />
                </div>
                <header>
                    <h3>Laboratorios de ingienería</h3>
                </header>
                <p>Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor lorem ipsum.</p>
                <footer>
                    <a href="#" class="button special">Inactivo</a>
                </footer>
            </article>
            <article data-aos-delay="300" data-aos="fade-up">
                <div class="image fit">
                    <img src="images/lab2.jpg" style="max-width: 576px; height: auto;" alt="Pic 01" />
                </div>
                <header>
                    <h3>Laboratorio de computación</h3>
                </header>
                <p>Sed adipiscing ornare risus. Morbi est est, blandit sit amet, sagittis vel, euismod vel, velit. Pellentesque egestas sem. Suspendisse commodo ullamcorper magna non comodo sodales tempus.</p>
                <p align="center">
                    <footer>
                        <a href="#" class="button special">Inactivo</a>
                    </footer>
                </p>

            </article>
        </div>
    </div>
</section>
<!-- Footer -->
<footer id="footer">
    <div class="inner">
        <div class="flex">
            <div class="copyright">
                &copy; Universidad Virtual. Design: Octavio Lara.
            </div>
            <ul class="icons">
                <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
                <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
                <li><a href="#" class="icon fa-linkedin"><span class="label">linkedIn</span></a></li>
                <li><a href="#" class="icon fa-pinterest-p"><span class="label">Pinterest</span></a></li>
                <li><a href="#" class="icon fa-vimeo"><span class="label">Vimeo</span></a></li>
            </ul>
        </div>
    </div>
</footer>

<!-- Scripts -->
<script src="{{asset('/ua/js/jquery.min.js')}}"></script>
<script src="{{asset('/ua/js/skel.min.js')}}"></script>
<script src="{{asset('/ua/js/util.js')}}"></script>
<script src="{{asset('/ua/js/main.js')}}"></script>
<script src="{{('/js/app.js')}}"></script>


</body>
</html>
