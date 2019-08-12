import Vue from 'vue'
import Router from 'vue-router'

// import pages
import listaCliente from './components/ListaClientes.vue'
import example from './components/teste'


Vue.use(Router)

export default new Router({
    mode: 'history',
    routes:[
        {
            path: '/teste',
            name: 'clientes',
            component: listaCliente
        }
    ]
})
