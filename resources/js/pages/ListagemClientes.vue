<template>
  <div class="container">
      <v-card width="600">
          <v-card-title >
            Lista de Clientes
          </v-card-title>
          <v-card-text>
            <p>Aqui estão todos os clientes cadastrados.</p>
          </v-card-text>
          
        </v-card>
    <div class="lista">
      <listaClientes></listaClientes>
    </div>
    <div>
      <v-btn @click="inicio">Inicio</v-btn>
    </div>
     
  </div>
</template>

<script>
  import listaClientes from '../components/ListaClientes'
  export default {
    components:{
      listaClientes
    },
    methods:{
      inicio(){
         this.$router.push('/')
      },
    },
    data(){
      return{

      }
    },
    mounted(){
      console.log("Componente page ListagemClientes")
     },
  }
</script>
