<template>
  <div class="lista">
    <v-card width="600">
      <v-simple-table>
        <thead>
          <tr>
            <th class="text-center">
              Nome
            </th>
            <th class="text-center">
              Opções
            </th>
          </tr>
        </thead>
        <tbody>
          <tr
            v-for="cliente in clientes"
            :key="cliente.id"
          >
            <th>{{ cliente.nome }}</th>
            <th>
              <v-btn @click="listaCompras(cliente.id)">
                Compras
              </v-btn>
            </th>
          </tr>
        </tbody>
      </v-simple-table>
    </v-card>
  </div>
</template>

<script>
const axios = require('axios')
export default {
  name: 'ListaClientes',
  data () {
    return {
      clientes: ''
    }
  },
  mounted () {
    console.log('Componente')
    axios
      .get('/api/clientes')
      .then(response => (this.clientes = response.data.clientes))
  },
  methods: {
    listaCompras (id) {
      this.$router.push({
        path: 'listaCompras/',
        query: { id }
      })
    }
  }
}
</script>
