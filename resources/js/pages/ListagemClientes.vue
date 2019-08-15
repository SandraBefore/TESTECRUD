<template>
  <div class="container">
    <v-card width="600">
      <v-card-title>
        Lista de Clientes
      </v-card-title>
      <v-card-text>
        <p>Aqui estão todos os clientes cadastrados.</p>
      </v-card-text>
      <v-card-actions>
        <v-btn
          class="ma-2"
          outlined
          color="purple"
          @click="cadastroClientes"
        >
          Cadastrar Clientes
        </v-btn>
      </v-card-actions>
    </v-card>
    <div class="lista">
      <listaClientes />
    </div>
    <div class="lista">
      <v-btn @click="inicio">
        Inicio
      </v-btn>
    </div>
  </div>
</template>

<script>
import listaClientes from '../components/ListaClientes'
export default {
  components: {
    listaClientes
  },
  data () {
    return {

    }
  },
  mounted () {
    console.log('Componente page ListagemClientes')
  },
  methods: {
    inicio () {
      this.$router.push('/')
    },
    cadastroClientes () {
      this.$router.push('/CadastroClientes')
    }
  }
}
</script>
