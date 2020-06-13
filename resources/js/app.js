import VueRouter from 'vue-router'
import AOS from 'aos'
import 'aos/dist/aos.css'
import Diseno from './components/Diseno.vue'
import Desarrollo from './components/Desarrollo.vue'
import Main from './components/Main.vue'


//basicos reutilizables
require('./bootstrap');
window.Vue = require('vue');
Vue.use(VueRouter);

//componentes de pagina principal
Vue.component('main-page', Main);
Vue.component('Desarrollo', Desarrollo );
Vue.component('Diseno', Diseno);

//Rutas de diseño y desarrollo
const routes = [
    {path: '/', component: Diseno},
    {path: '/Desarrollo', component: Desarrollo},
];
const router = new VueRouter({
    routes
});


app = new Vue({
    created (){
        AOS.init()
    },
    el: '#demo',
    router,

});