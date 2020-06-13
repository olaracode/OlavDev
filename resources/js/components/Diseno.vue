<template>
    <div>
        <section id="wrapper">
            <header>
                <div class="inner">
                    <h2>Diseño Web</h2>
                    <p>Las primeras impresiones cuentan</p>
                </div>
            </header>
            <div class="wrapper">
                <div class="inner">
                    <h3 class="major">El diseño de una pagina determina su exito</h3>
                    <p align="justify" data-aos="fade-left">
                        Una realidad que mucha gente prefiere obviar es el hecho de que los primeros minutos despues de ingresar a una pagina
                        determinan si vas a ser usuario de dicha pagina o no.
                        Una pagina sobre cargada de imagenes y objetos puede ser abrumadora para el usuario y en vez de atraerlos los aleja.
                        Lo mismo pasa con las animaciones,
                        si una pagina tiene demasiadas animaciones, cosas moviendose o sencillamente es demasiado pesada y las animaciones o
                        imagenes no cargan de manera rapida puedes optar buscar otra compañia, tienda o emprendimiento que te ofrezca lo mismo de una manera mas compacta.
                        <br><br>
                        Por eso el enfoque que se toma al momento de realizar el diseño de una pagina web es el minimalismo, la funcionalidad
                        y sobre todas las cosas mantener al usuario interesado en el contenido mientras que el diseño se lo entrega de una manera
                        que no lo abrume ni estrese.
                    </p>
                    <div align="center">
                        <button @click="show=!show">Ejemplos</button>
                    </div>
                    <br><br>
                    <transition name="ejemplo">
                        <section v-if="show" class="features">
                            <article>
                                <a href="images/bad.png" class="image"><img src="images/bad.png" alt="" /></a>
                                <h3 class="major">Incorrecto</h3>
                                <p>
                                    Aunque no es una pagina sobre cargada de objetos, es una pagina algo confusa de ver,
                                    desorganizada, quizás sea funcionalmente correcta, pero no es una pagina visualmente atractiva ni inspira confianza.
                                    <br><strong>¿Ingresarías los datos de tu tarjeta de crédito en ella?</strong>
                                </p>
                            </article>
                            <article>
                                <a href="images/good.png" class="image"><img src="images/good1.png"  alt=""/></a>
                                <h3 class="major">Correcto</h3>
                                <p>
                                    Uso correcto de una imagen, llamando la atención del cliente al nombre, pero sin ser muy abrumador.<br>
                                    Un esquema de colores bien definido, botones solo con la informacion necesaria sin imagenes. <br>
                                    Un diseño minimalista, que no significa vacío o poco atractivo.<br>
                                    <strong>Menos es más.</strong>
                                </p>
                            </article>
                        </section>
                    </transition>
                    <h3 class="major">¿Pagina web o redes sociales?</h3>
                    <p align="justify" data-aos="fade-left">
                        Las redes sociales son ahora más que nunca el principal modo de marketing que todos tenemos al alcance de la mano.
                        Ignorar las redes sociales es un suicidio comercial ya que excluyes un gran porcentaje de clientes. Se estima que a estas alturas del 2020
                        4.5 billones de personas utilizan redes sociales, mas del 50% de la población mundial.
                        <br><br>
                        Esos datos dejan la pregunta sin responder la interrogante. No es cuestión de escoger el uno o el otro.
                        Es tener en cuenta la función que va a cumplir cada uno con respecto a tus necesidades. Las redes sociales deben funcionar para
                        atraer a los clientes, realizar ofertas y mostrar los productos o servicios. Las páginas web desempeñan el papel de poder
                        mostrar a los clientes los detalles especificos de lo que ofrezcas, precio de todos los productos, disponibilidad, etc.
                    </p>
                </div>
                <section id="one" class="wrapper spotlight style1"  data-aos="fade-left">
                    <div class="inner">
                        <a href="" class="image"><img src="images/price.jpg" alt="" /></a>
                        <div class="content">
                            <h2 class="major">Rápido acceso a precios/presupuestos</h2>
                            <p align="justify">
                                A medida que tu negocio crezca se va a volver mas dificil atender a todos los clientes a traves de las redes sociales.
                                Tener un community manager puede simplificar esto, pero la realidad es que él no va a tener todas las respuestas al momento
                                y si administra tu página de seguro administra otras paginas. Si no tiene una respuesta rápida a sus dudas quizas pierdas una venta
                                mientras que con una pagina web puedes redirigir a todos tus clientes a ella y solamente responder por las redes sociales preguntas
                                muy especificas
                            </p>
                        </div>
                    </div>
                </section>
                <section id="two" class="wrapper alt spotlight style2" data-aos="fade-right">
                    <div class="inner">
                        <a href="#" class="image"><img src="images/increase.jpg" alt="" /></a>
                        <div class="content">
                            <h2 class="major">Escalabilidad</h2>
                            <p align="justify">
                                Tu página web puede ser tan pequeña o tan grande como tus necesidades lo dicten. Y a medida que tu negocio crezca y tus necesidades cambien
                                tambien puede cambiar las dimensiones de tu pagina web para adaptarse a ellas.
                            </p>
                        </div>
                    </div>
                </section>
                <section id="three" class="wrapper spotlight style3" data-aos="fade-left">
                    <div class="inner">
                        <a href="#" class="image"><img src="images/mob.jpg" alt="" /></a>
                        <div class="content">
                            <h2 class="major">Facil acceso</h2>
                            <p align="justify">
                                Con un solo click los clientes podrán ver toda la información que necesitan saber antes de realizar una compra o solicitar un servicio.
                                No importa si están en su telefono, computadora, tablet u SmartTV. Nuestras paginas son 100% adaptativas a las dimensiones de cualquier equipo
                            </p>
                        </div>
                    </div>
                </section>
            </div>
        </section>
    </div>
</template>
<style>
    .ejemplo-enter-active, .ejemplo-leave-active{
        transition: opacity 0.5s ease-in-out, transform 0.5s ease;
    }
    .ejemplo-enter-active{
        transition-delay: 0.5s;
    }
    .ejemplo-enter, .ejemplo-leave-to {
        opacity: 0;
        transform: translateX(-50px);
    }
    .ejemplo-enter-to, .ejemplo-leave {
        opacity: 1;
        transform: translateX(3px);
    }
</style>
<script>
    export default {
        name: 'diseno',
        data(){
            return{
                show:false
            }
        }
    }
</script>
