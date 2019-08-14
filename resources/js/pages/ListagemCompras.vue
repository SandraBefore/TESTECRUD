<template>
  <div class="container">
    <div> 
      <v-card width="600">
          <v-card-title >
            Lista de Compras
          </v-card-title>
          <v-card-text>
            <p>Aqui está a lista de todas as compras de cliente</p>
            <listaCompras :id="this.$route.query.id"></listaCompras>
          </v-card-text>

          <v-card-actions>
            
          </v-card-actions>
        </v-card>
    </div>

    <div>
      <v-btn @click="inicio">Inicio</v-btn>
      <v-btn @click="listaClientes">Lista de Clientes</v-btn>
    </div>
  </div>
</template>
<script>
 import listaCompras from '../components/ListaCompras'
  export default {
    components: {
      listaCompras
    },
    methods: {
      inicio(){
         this.$router.push('/')
      },
      listaClientes() {      
        this.$router.push('/listagemClientes')      
      }
    },
    data() {
      return{
       id: ''
      }
    },
    mounted() {
      this.id = this.$route.query,
      console.log("Componente page ListagemCompras"),
      console.log(this.$route.query)
     },
  };
  

</script>