<template>
  <div class="container">
    
    <div> 
      <ul class="nav">
          <li> <button @click="listaClientes">Clientes</button></li>
           <li> <button @click="listaClientes">Clientes</button></li>
            <li> <button @click="listaClientes">Clientes</button></li>
             <li> <button @click="listaClientes">Clientes</button></li>
              <li> <button @click="listaClientes">Clientes</button></li>
      </ul> 
    </div>

    <div class="card-header">Home</div>
  </div>
</template>

<script>
export default {
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
<style>
.container{
  background-color: whitesmoke;
  border: purple;
}

.nav{
  background: purple;
  border-radius: 5px;
}
.nav li{
  display: inline-block;
  background-color: purple;
  color: white;
  border-color: white;
  border-style: solid;
}
h4 {
  color: purple;
}

p {
    background-color: whitesmoke;
    border:purple;
    border-radius: 5px;
}
button{
  background-color: purple;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  display: center;
  border-color: white;
}
</style>