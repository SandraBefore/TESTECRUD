require('./bootstrap');
import Vue from 'vue'
import App from './App.vue'

import router from './router'

// import lottie from 'lottie-web'
// import '/axios'
// import './plugins/datefns'

window.Vue = Vue
Vue.router = router
Vue.component('batata', App)

// window.VueRouter=require('vue-router').default;
// window.VueAxios=require('vue-axios').default;
// window.Axios=require('axios').default;


// Vue.use(VueRouter, VueAxios, axios);
// const routes = [
//     {
//         name: 'Teste',
//         path: '/teste',
//         component: teste
//     },
// ];
// const router = new VueRouter({ mode: 'history', routes: routes});

// const lista = Vue.component(require('./components/ListaClientes.vue').default);
// const testes = Vue.component('Teste', {template: 'Pingalote'});

// let AppLayout = require('./components/ListaClientes.vue');
// new Vue(
//     Vue.util.extend({router}, AppLayout)
// ).$mount('#app');

const app = new Vue({
    el:'#app',
    router
})
