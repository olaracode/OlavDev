<template>
    <div id="page-wrapper">
        <section id="wrapper">
            <header>
                <div class="inner">
                    <div class="row gtr-uniform" align="center">
                        <div class="col-6 col-12-xsmall">
                            <router-link class="button fit" to="/">Diseño</router-link>
                        </div>
                        <div class="col-6 col-12-xsmall">
                            <router-link class="button fit" to="/Desarrollo">Desarrollo</router-link>
                        </div>
                    </div>
                </div>
            </header>
            <transition name="view">
                <router-view></router-view>
            </transition>
        </section>
    </div>
</template>

<script>
    export default {
        name: "main.vue"
    }
</script>

<style scoped>
    .view-enter-active, .view-leave-active{
        transition: opacity 0.5s ease-in-out, transform 0.5s ease;
    }
    .view-enter-active{
        transition-delay: 0.5s;
    }
    .view-enter, .view-leave-to {
        opacity: 0;
        transform: translateY(-50px);
    }
    .view-enter-to, .view-leave {
        opacity: 1;
        transform: translateY(3px);
    }
</style>