<template>
    <div>
        <section id="wrapper">
            <header>
                <div class="inner">
                    <h2>Desarrollo Web</h2>
                    <p>El cerebro detrás de una pagina web</p>
                </div>
            </header>
        </section>
        <div class="wrapper">
            <div class="inner">
                <section>
                    <h3 class="major">La página como ayuda al propietario</h3>
                    <p align="justify" data-aos="fade-left">
                        Mientrás que el diseño es para atraer al cliente. El area de programación web tiene como enfoque simplificar la vida de los propietarios
                        bien sea manteniendo de una manera ordenada el invetario, manejando citas, modificando archivos. Los limites de la funcionabilidad de una pagina web
                        los dictamina la capacidad de imaginación del propietario.
                        <br><br>
                        ¿Necesitas agregar/eliminar un producto, un usuario, una cita? con solo tocar un boton lo logras.
                        <br><br>
                        ¿Quieres un blog donde los usuarios puedan agregar imagenes, comentarios, guardar publicadiones y editar las mismar? no es mayor problema.
                    </p>
                </section>
                <section id="four" class="wrapper alt style1">
                    <div class="inner" data-aos="fade-up">
                        <h2 class="major">Area Tecnica</h2>
                        <p>
                            Para aquellos con mayor conocimiento o curiosidad por el area tecnologica explicamos un poco
                            lo utilizado para la creación de las paginas.
                        </p>
                        <section class="features">
                            <article data-aos="fade-up">
                                <a href="#" class="image"><img src="images/php.png" alt=""/></a>
                                <h3 class="major">PHP</h3>
                                <p>
                                    Es un lenguaje de programación de uso general que se adapta especialmente al desarrollo web.
                                    PHP puede ser desplegado en la mayoría de los servidores web y en todos los sistemas operativos y plataformas sin costo alguno. El lenguaje PHP se encuentra instalado en más de 20 millones de sitios web y en un millón de servidores.
                                </p>
                            </article>
                            <article data-aos="fade-up">
                                <a href="#" class="image"><img src="images/laravel.png"  alt="" /></a>
                                <h3 class="major">Laravel</h3>
                                <p>
                                    Laravel tiene como objetivo ser un framework que permita el uso de una sintaxis
                                    elegante y expresiva para crear código de forma sencilla y permitiendo multitud de
                                    funcionalidades. Intenta aprovechar lo mejor de otros frameworks y aprovechar las
                                    características de las últimas versiones de PHP.<br>

                                    Gran parte de Laravel está formado por dependencias, especialmente de Symfony, esto
                                    implica que el desarrollo de Laravel dependa también del desarrollo de sus dependencias.
                                </p>
                            </article>
                            <article data-aos="fade-up">
                                <a href="#" class="image"><img src="images/mysql.jpg" alt="" /></a>
                                <h3 class="major">Mysql</h3>
                                <p>
                                    MySQL es un sistema de gestión de bases de datos relacional desarrollado bajo
                                    licencia dual: Licencia pública general/Licencia comercial por Oracle Corporation y
                                    está considerada como la base de datos de código abierto más popular del mundo,
                                    ​ y una de las más populares en general junto a Oracle y Microsoft SQL Server, sobre
                                    todo para entornos de desarrollo web.
                                </p>
                            </article>
                            <article data-aos="fade-up">
                                <a href="#" class="image"><img src="images/html.png" alt="" /></a>
                                <h3 class="major">HTML/CSS/Javascript</h3>
                                <p>
                                    Html y css son la base sobre la que todas las páginas web se encuentran contruidas.<br>
                                    Javascript es uno de los lenguajes mas reconocidos a nivel mundial y uno de los mas importantes en la parte de diseño web
                                    con javascript se logran animaciones y funciones que diferencian una pagina estatica de una adaptativa.
                                </p>
                            </article>
                        </section>
                        <div align="center" data-aos="fade-up">
                            <a href="#" class="button">Portafolio</a>
                        </div>
                    </div>
                </section>
            </div>

        </div>
    </div>

</template>
<script>
    export default {
        data(){
            return {
                php:false,
                laravel:false,
                mysql: false,
                html: false
            }
        }
    };
</script>

<style scoped>
    .fade-enter-active, .fade-leave-active {
        transition: opacity .5s;
    }
    .fade-enter, .fade-leave-to /* .fade-leave-active below version 2.1.8 */ {
        opacity: 0;
    }
</style>