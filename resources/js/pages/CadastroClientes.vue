<template>
  <div class="container">
    <v-card width="600">
      <v-card-title>
        Cadastro de Clientes
      </v-card-title>
      <v-card-text>
        <cadastroClientes />
      </v-card-text>
    </v-card>
    <div class="lista">
      <v-btn @click="listaClientes">
        Voltar
      </v-btn>
    </div>
  </div>
</template>

<script>
import cadastroClientes from '../components/FormClientes'
export default {
  components: {
    cadastroClientes
  },
  mounted () {
    console.log('Componente')
  },
  methods: {
    listaClientes () {
      this.$router.push('/listagemClientes')
    }
  }
}
</script>
