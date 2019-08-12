<template>
  <div class="container">
    <div class="card-header">Lista de Clientes</div>
    <div>
      <br />
    </div>
    <div>
      <ul>
        <h4>Nome</h4>
        <li>{{clientes}}</li>
      </ul>

       <button @click="listaCompras">Compras</button>
    </div>
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
        .get("/clientes")
        .then(response => (this.clientes = response.data.clientes));
  }
};
</script>