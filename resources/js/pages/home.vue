<template>
  <div class="container">
    <div> 
      <v-card
           max-width="500"
         >
          <v-card-title >
            Inicio
          </v-card-title>
          <v-card-text>
            <p>Sistema de cadastro de Clentes e suas compras.</p>
          </v-card-text>

          <v-card-actions>
            <v-btn @click="listaClientes">Lista de Clientes</v-btn>
          </v-card-actions>
        </v-card>
    </div>
  </div>
</template>

<script>
  export default {
    data(){
      return{
        center: 'center'
      }
    },
    mounted(){
      console.log("Componente")
     },
    methods: {
      listaClientes() {      
        this.$router.push('/listaClientes')      
      }
    }
  };
</script>