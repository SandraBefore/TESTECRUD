<template>
  <v-simple-table width="600">
    <thead>
      <tr>
        <th class="text-center">
          valor
        </th>
        <th class="text-center">
          Quantidade
        </th>
        <th class="text-center">
          Opções
        </th>
      </tr>
    </thead>
    <tbody>
      <tr
        v-for="compra in compras"
        :key="compra.valor"
      >
        <th>{{ compra.valor }}</th>
        <th>{{ compra.quantidade }}</th>
        <th>
          <v-btn @click="excluir">
            Excluir
          </v-btn>
        </th>
      </tr>
    </tbody>
  </v-simple-table>
</template>

<script>
const axios = require('axios')
export default {
  name: 'ListaCompras',
  props: {
    id: {
      type: String,
      required: true
    }
  },
  data () {
    return {
      compras: ''

    }
  },
  mounted () {
    console.log('Component Lista de Compras.')
    axios
      .get('/api/clientes/' + this.id + '/vendas')
      .then(response => (this.compras = response.data.compras))
  },
  methods: {
    excluir () {

    }
  }
}
</script>
