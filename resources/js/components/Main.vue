<template>
    <div id="#demo">
        <!-- Header -->
        <section id="header" class="cabecera">
            <header>
                <a href="/"><h1>Olara</h1></a>
                <p>Etapas</p>
            </header>
            <footer>
                <a href="#first" class="button style2 scrolly">Portafolios</a>

            </footer>
        </section>

        <!-- Banner -->
        <section id="banner">
            <div class="row">
                <div class="col-4" data-aos="slide-left" data-aos-duration="1000"><router-link to="/" class="button style2">Diseño</router-link></div>
                <div class="col-4"><router-link to="/Desarrollo" class="button style2">Desarrollo</router-link></div>
                <div class="col-4" data-aos="slide-right" data-aos-duration="1000"><router-link to="/Despliegue" class="button style2">Despliegue</router-link></div>
            </div>
        </section>

        <router-view></router-view>
        <section id="banner5">
            <header>
                <h2>Impulsa tu negocio</h2>
            </header>
            <div align="center">
                <a href="/" class="button style1">Cotiza ahora</a>
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
    </div>

</template>

<script>
    export default {
        name: "Main"
    }
</script>

<style scoped>

</style>