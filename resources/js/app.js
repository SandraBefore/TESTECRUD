require('./bootstrap');
import 'vuetify/dist/vuetify.min.css'

import Vue from 'vue'
import App from './App.vue'
import router from './router'
import Vuetify from 'vuetify'

window.Vue = Vue

Vue.router = router
Vue.component('index', App)

Vue.use(Vuetify)

const app = new Vue({
    el:'#app',
    router,
    Vuetify
})
