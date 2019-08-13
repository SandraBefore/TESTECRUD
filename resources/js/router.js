import Vue from 'vue'
import Router from 'vue-router'

// import pages
import home from './pages/home.vue'

import listaCliente from './components/ListaClientes.vue'
import listaCompras from './components/ListaCompras.vue'


Vue.use(Router)

export default new Router({
    mode: 'history',
    routes:[
        {
            path: '/',
            name: 'home',
            component: home
        },
        {
            path: '/listaClientes',
            name: 'clientes',
            component: listaCliente
        },
        {
            path: '/listaCompras',
            name: 'compras',
            component: listaCompras
        }
        
    ]
})
