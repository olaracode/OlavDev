<html xmlns:v-on="http://www.w3.org/1999/xhtml">
    <head>
        <title>Visual</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <link rel="stylesheet" href="{{asset('/css/visual/main.css')}}" />
        <noscript><link rel="stylesheet" href="{{asset('/css/visual/noscript.css')}}" /></noscript>
    </head>
    <?php 
    $vistas = 0;
    $x = 0;
     foreach (App\Consulta::all() as $consulta) {
         $x++;
         if ($consulta->visto != true) {
             $vistas++;
         }
     }
    ?>
    <body class="is-preload">
        <div id="demo">
            <section id="banner1">
                <header>
                    <h2><a href="/">Olarav</a></h2>
                    <h1>Administración</h1>
                    <div class="row">
                        <div class="col-12">

                            <a href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <form id='logout-form' action="{{ route('logout') }}" method="POST">
                                @csrf
                            </form>
                        </div>
                        <div class="col-6">
                            <header>Consultas: <h1>{{$x}}</h1></header>
                        </div>                      
                        <div class="col-6">
                            <header>Consultas nuevas: <h1>{{$vistas}}</h1></header>
                        </div>           
                    </div>
                </header>
                <footer>
                </footer>
            </section>
            <section class="container box style1">
                <header>
                    <h2>Nuevas consultas</h2>
                </header>
                <div class="table-wrapper">
                    <table>
                        <thead>
                            <tr>
                                <th>Correo</th>
                                <th>Ver</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach(\App\Consulta::all() as $consulta)
                            @if($consulta->visto == false)
                                <tr>
                                    <td>
                                       {{$consulta->email}}
                                    </td>
                                    <td>
                                        <a href="consultas/{{$consulta->id}}/edit" style="color: #300c01">Ir</a>
                                    </td>
                                </tr>
                            @endif
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </section>
            <section class="container box style1" id="todas">
                <header>
                    <h2>Consultas vistas</h2>
                </header>
                <div class="table-wrapper">
                    <table>
                        <thead>
                        <tr>
                            <th>Correo</th>
                            <th>Ver</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach(\App\Consulta::all() as $consulta)
                            @if ($consulta->visto == true)
                                <tr>
                                    <td>
                                        {{$consulta->email}}
                                    </td>
                                    <td>
                                        <a href="consultas/{{$consulta->id}}/edit" style="color: #300c01">Ir</a>
                                    </td>
                                </tr>
                            @endif

                        @endforeach
                        </tbody>
                    </table>
                </div>
            </section>
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