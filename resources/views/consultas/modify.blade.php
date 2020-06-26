@extends('layouts.main')
@section('content')
    <?php $consulta = \App\Consulta::find($id);
    ?>
        <section id="banner1">
            <header>
                <h2><a href="{{('admin')}}">Olarav</a></h2>
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
                </div>
            </header>
        </section>
        <section class="container box style1">
            <div align="center">
                <header>
                    <h2>Consulta de {{$consulta->nombre}}</h2>
                </header>
                <h1>Correo: {{ $consulta->email }}</h1>
                <p>{{$consulta->consulta}}</p>
                <div class="row">
                    @if ($consulta->visto == true)
                        <div class="col-12">
                            <form action="/consultas/{{$consulta->id}}/delete" method="post">
                                <input type="hidden" name="_method" value="PATCH">
                                @csrf
                                <input type="submit" value="Eliminar">
                            </form>
                        </div>
                            
                    @else
                        <div class="col-12">
                            <form action="/consultas/{{$consulta->id}}" method="post">
                                <input type="hidden" name="_method" value="PATCH">
                            
                                @csrf
                                <input type="submit" value="visto">
                            </form>
                        </div>
                    @endif
                </div>
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

@endsection