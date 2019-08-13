<template>
  <div class="container">
     <v-card >
      <v-simple-table>
        <thead>
          <tr>
            <th class="text-center">valor</th>
            <th class="text-center">Opções</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="compra in compras" :key="compra.valor">
            <th>{{ compra.valor }}</th>
            <th><v-btn @click="listaCompras">Inicio</v-btn></th>
          </tr>
        </tbody>

      </v-simple-table>
     </v-card>
     <v-cartd><v-btn @click="inicio">Inicio</v-btn></v-cartd>
  </div>
</template>

<script>

    export default {
        data(){
            return {
                compras: ""
            };
        },
        methods: {
            inicio(){
                this.$router.push('/')
            }
        },
        mounted() {
            console.log('Component mounted.'),
            axios
                .get("/api/clientes")
                .then(response => (this.clientes = response.data.clientes));
        }
    }
</script>
