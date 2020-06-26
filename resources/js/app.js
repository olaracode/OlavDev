import VueRouter from 'vue-router'
import AOS from 'aos'
import VueFlip from 'vue-flip'
import 'aos/dist/aos.css'
import Diseno from './components/Diseno.vue'
import Desarrollo from './components/Desarrollo.vue'
import Main from './components/Main.vue'
import Despliegue from './components/Despliegue.vue'
import Portfolio from './components/Portfolio.vue'
// import Admin from './components/Admin.vue'
//

//basicos reutilizables
require('./bootstrap');
window.Vue = require('vue');
Vue.use(VueRouter);

//componentes de pagina principal
Vue.component('main-page', Main);
Vue.component('Desarrollo', Desarrollo );
Vue.component('Diseno', Diseno);
Vue.component('Despliegue', Despliegue);
Vue.component('Portfolio', Portfolio)
// Vue.component('Admin', Admin)

//Rutas de diseño y desarrollo
const routes = [
    {path: '/', component: Diseno},
    {path: '/Desarrollo', component: Desarrollo},
    {path: '/Despliegue', component: Despliegue},
    {path: '/Portfolio', component: Portfolio}
];

const router = new VueRouter({
    routes
});

app = new Vue({
    created (){
        AOS.init()
    },
    components:{
        'vue-flip': VueFlip
    },
    el: '#demo',
    router,
});