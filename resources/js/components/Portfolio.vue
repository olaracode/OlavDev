<template>
    <article class="container box style2" data-aos="fade-down" data-aos-duration="1000">
        <header>
            <h2>Portafolios</h2>
            <p>Diseños para servir de guía o plantilla para su diseño.<br />
                Para optimizar los botones, links y formularios no están activados.
            </p>
        </header>
        <div class="inner gallery">
            <div class="row gtr-0">
                <div class="col-3 col-12-mobile"  data-aos-delay="100" data-aos-duration="700" data-aos="flip-right">
                    <a href="#" class="image fit">
                        <img :src="'/images/Visual.png'" alt=""/>
                    </a>
                </div>
                <div class="col-3 col-12-mobile" data-aos-delay="200" data-aos-duration="700" data-aos="flip-right">
                    <a href="/portfolio/rs" class="image fit">
                        <img :src="'/images/Rs.png'" alt=""/>
                    </a>
                </div>
                <div class="col-3 col-12-mobile" data-aos-delay="300" data-aos-duration="700" data-aos="flip-right">
                    <a href="/portfolio/univ" class="image fit">
                        <img :src="'/images/Good.png'" alt=""/>
                    </a>
                </div>
                <div class="col-3 col-12-mobile" data-aos-delay="400" data-aos-duration="700" data-aos="flip-right">
                    <a href="/portfolio/estudio" class="image fit">
                        <img :src="'/images/estudio.png'" alt=""/>
                    </a>
                </div>
            </div>
            <div class="row gtr-0">
                <div class="col-3 col-12-mobile" data-aos-delay="500" data-aos-duration="700" data-aos="flip-right">
                    <a href="#" class="image fit">
                        <img :src="'/images/banner3.jpg'" alt=""/>
                    </a>
                </div>
                <div class="col-3 col-12-mobile" data-aos-delay="600" data-aos-duration="700" data-aos="flip-right">
                    <a href="#" class="image fit">
                        <img :src="'/images/banner3.jpg'" alt=""/>
                    </a>
                </div>
                <div class="col-3 col-12-mobile" data-aos-delay="700" data-aos-duration="700" data-aos="flip-right">
                    <a href="#" class="image fit">
                        <img :src="'/images/banner3.jpg'" alt=""/>
                    </a>
                </div>
                <div class="col-3 col-12-mobile" data-aos-delay="800" data-aos-duration="700" data-aos="flip-right">
                    <a href="#" class="image fit">
                        <img :src="'/images/banner3.jpg'" alt=""/>
                    </a>
                </div>
            </div>
        </div>
    </article>

</template>

<script>
    export default {
        name: "Portfolio"
    }
</script>

<style scoped>

</style>