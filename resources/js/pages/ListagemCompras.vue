<template>
  <div class="container">
    <div>
      <v-card width="600">
        <v-card-title>
          Lista de Compras
        </v-card-title>
        <v-card-actions>
          <v-btn @click="cadastroClientes">
            Cadastrar Compras
          </v-btn>
        </v-card-actions>
        <v-card-text>
          <p>Aqui está a lista de todas as compras de cliente</p>
          <listaCompras :id="this.$route.query.id" />
        </v-card-text>
      </v-card>
    </div>

    <div class="lista">
      <v-btn @click="inicio">
        Inicio
      </v-btn> <br>
      <v-btn @click="listaClientes">
        Lista de Clientes
      </v-btn>
    </div>
  </div>
</template>
<script>
import listaCompras from '../components/ListaCompras'
export default {
  components: {
    listaCompras
  },
  data () {
    return {
      id: ''
    }
  },
  mounted () {
    this.id = this.$route.query
    console.log('Componente page ListagemCompras')
    console.log(this.$route.query)
  },
  methods: {
    inicio () {
      this.$router.push('/')
    },
    listaClientes () {
      this.$router.push('/listagemClientes')
    }

  }
}

</script>
