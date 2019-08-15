import Vue from 'vue'
import Router from 'vue-router'

// import pages
import home from './pages/Home.vue'
import listagemCliente from './pages/ListagemClientes'
import listagemCompras from './pages/ListagemCompras'
import cadastroClientes from './pages/CadastroClientes'

Vue.use(Router)

export default new Router({
  mode: 'history',
  routes: [
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
      path: '/CadastroClientes',
      name: 'cadastroClientes',
      component: cadastroClientes
    },
    {
      path: '/CadastroCompras',
      name: 'cadastroCompras',
      component: cadastroClientes
    },
    {
      path: '/listaCompras',
      name: 'compras',
      component: listagemCompras,
      props: true
    }

  ]
})
