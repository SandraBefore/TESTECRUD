import Vue from 'vue'
import Router from 'vue-router'

// import pages
import home from './pages/Home.vue'
import listagemCliente from './pages/ListagemClientes.vue'
import listagemCompras from './pages/ListagemCompras.vue'


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
            path: '/listagemClientes',
            name: 'clientes',
            component: listagemCliente
        },
        {
            path: '/listaCompras/',
            name: 'compras',
            component: listagemCompras,
            props: true
        }
        
    ]
})
