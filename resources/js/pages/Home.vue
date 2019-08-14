<template>
  <div class="container">
      <v-card width="600">
       <v-card-title >
            Inicio
        </v-card-title>
        <v-card-text>
            <p>Sistema de cadastro de Clientes e suas compras.</p>
        </v-card-text>

        <v-card-actions>
          <v-btn @click="listaClientes">Lista de Clientes</v-btn>
        </v-card-actions>
      </v-card>
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
        this.$router.push('/listagemClientes')      
      }
    }
  };
</script>
<style>
.container{
  display: flex;
  flex-direction: column ;
  align-items: center;
  background-color: purple;
  width: 100%;
  height: 100vh;
}
.lista{
  margin-top: 10px;
  width: 100%;
  align-items: center;
}
</style>