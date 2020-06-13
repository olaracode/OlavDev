@extends('layouts.main')
@section('content')
    <div id="page-wrapper">
        <section id="wrapper">
            <header>
                <div class="inner">
                    <h2>Portafolio</h2>
                    <p>
                        Portafolio y catalogo de diseños realizados por mi persona.
                        Todos los modelos son personalizables
                    </p>
                </div>
            </header>
            <div class="wrapper">
                <div class="inner">
                    <section>
                        <div class="inner">
                            <section class="features">
                                <article data-aos="fade-right">
                                    <a href="#" class="image"><img src="images/good.png" alt=""/></a>
                                    <h3 class="major">Página inspirada en universidad</h3>
                                    <p align="justify">
                                        Página inspirada en una universidad, versatilidad de conceptos. Ingreso restringido a visitantes, ingreso con capacidad de agregar y elimar publicaciones para usuarios registrados.
                                         Area administrativa, con capacidad de eliminar publicaciones ajenas, usuarios y más.
                                    </p>
                                    <div align="center">
                                        <a href="{{('/univ')}}" class="button">Ver muestra</a>
                                    </div>
                                </article>
                                <article data-aos="fade-left">
                                    <a href="#" class="image"><img src="images/estudio.png"  alt="" /></a>
                                    <h3 class="major">Página de estudio de tatuaje</h3>
                                    <p align="justify">
                                       Con la inspiracion de estudios de tatuajes, se crea una pagina con secciones separadas de
                                        visitantes y administradores. Con la capacidad de agregar mas artistas, nuevas imagenes que se agregan a la galeria de manera automatica,
                                        sistema de agenda de citas con cobranza.
                                    </p>
                                    <div align="center">
                                        <a href="#" class="button">Ver muestra</a>
                                    </div>
                                </article>
                                <article data-aos="fade-left">
                                    <a href="#" class="image"><img src="images/visual.png" alt="" /></a>
                                    <h3 class="major">Fotografía y diseño</h3>
                                    <p align="justify">
                                        Un blog personal para mostrar trabajos de fotografía, diseño, relatos y cualquier tipo de información que deseen compartir.
                                        Una aplicación con una sección de administración oculta, solo disponible para el propietario para administrar sus registros.
                                    </p>
                                    <div align="center">
                                        <a href="#" class="button">Ver muestra</a>
                                    </div>
                                </article>
                                <article data-aos="fade-right">
                                    <a href="#" class="image"><img src="images/helios.png" alt="" /></a>
                                    <h3 class="major">'Helios' Empresa</h3>
                                    <p>
                                      Enfoque minimalista al ambito empresarial, un modelo de página web que permitirá a tus clientes
                                        ver tus servicios, productos. Con la capacidad de adaptarse a cualquier empresa o tienda Helios es una plataforma perfecta para administrar productos y servicios
                                    </p>
                                    <div align="center">
                                        <a href="#" class="button">Ver muestra</a>
                                    </div>
                                </article>
                            </section>
                </div>
            </div>
        </section>
    </div>
@endsection