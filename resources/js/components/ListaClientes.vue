<template>
  <div class="container">
     <v-card class="d-inline-flex pa-2">
      <v-simple-table>
        <thead>
          <tr>
            <th class="text-center">Nome</th>
            <th class="text-center">Opções</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="cliente in clientes" :key="cliente.nome">
            <th>{{ cliente.nome }}</th>
            <th><v-btn @click="listaCompras">Compras</v-btn></th>
          </tr>
        </tbody>

      </v-simple-table>
     </v-card>
  </div>
</template>

<script>
export default {
  data() {
    return {
      clientes: ""
    };
  },
  methods: {
      listaCompras(){
          this.$router.push('/listaCompras')
      }
  },
  mounted() {
    console.log("Componente"),
      axios
        .get("/api/clientes")
        .then(response => (this.clientes = response.data.clientes));
  }
};
</script>