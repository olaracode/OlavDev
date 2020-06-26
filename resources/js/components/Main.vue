<template>
    <div id="#demo">
        <!-- Header -->
            <section id="banner1">
                <header>
                    <h2><a href="/">Olarav</a></h2>
                    <p>Etapas del desarrollo</p>
                </header>

                <div class="row">
                    <div class="col-3" data-aos="slide-left" data-aos-duration="1000">
                        <router-link to="/">
                            Diseño
                        </router-link>
                    </div>
                    <div class="col-3">
                        <router-link to="/Desarrollo">
                            Desarrollo
                        </router-link>
                    </div>
                    <div class="col-3" data-aos="slide-right" data-aos-duration="1000">
                        <router-link to="/Despliegue">
                            Despliegue
                        </router-link>
                    </div>
                    <div class="col-3">
                        <router-link to="/Portfolio">Portafolios</router-link>
                    </div>
                </div>
            </section>

        <!-- Banner -->
        <router-view></router-view>
        <article class="container box" data-aos="fade-down" data-aos-duration="1000">
            <section id="banner">
                <header>
                    <h2>Impulsa tu negocio</h2>
                </header>
                <div align="center">
                    <a href="/" class="button style2">Cotiza ahora</a>
                </div>
            </section>
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
    </div>

</template>

<script>
    export default {
        name: "Main"
    }
</script>

<style scoped>

</style>