<template>
  <div>
    <v-form align="center">
      <v-col>
        <v-text-field
          v-model="cliente.nome"
          outlined
          placeholder="Nome"
          hint="Nome"
          required
        />
        <v-text-field
          v-model="cliente.endereco"
          outlined
          hint="Endereço"
          placeholder="Endereço"
        />
        <v-text-field
          v-model="cliente.numero"
          outlined
          hint="Número"
          placeholder="Número"
        />
        <v-btn
          @click="cadastro()"
        >
          Cadastrar
        </v-btn>
      </v-col>
    </v-form>
  </div>
</template>

<script>
const axios = require('axios')
export default {
  name: 'CadastroClientes',
  data () {
    return {
      cliente: {
        nome: '',
        endereco: '',
        numero: ''
      }
    }
  },
  mounted () {
    console.log('Componente Cadastro de Clientes.')
  },
  methods: {
    listaClientes () {
      this.$router.push('/listagemClientes')
    },
    cadastro () {
      axios.post('/api/clientes/salvar', this.cliente)
        .then(function (response) {
          console.log(response)
        })
        .catch(function (error) {
          console.log(error)
        })
      this.$router.push({ name: 'clientes' })
    }
  }
}
</script>
