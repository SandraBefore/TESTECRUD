<template>
    <div class="container">

       <div class="card-header">Lista de Clientes</div>
            <div >
                <!-- <router-link class="btn btn-xs btn-prymary">
                    <span class="glyphicon glyphicon-plus"></span>
                    botton
                </router-link> -->
                <br>
            </div>
            <div>
                <ul>
                    <h4>Nome</h4>
                <li>
                    {{clientes}}
                </li>
                </ul>

                <router-link class="btn btn-info btn-xs" :to="{name:'Teste'}">Clientes</router-link>
            </div>
    </div>
</template>

<script>
    export default {
        data (){
            return {
              clientes: '',
            }
        },

        // create(){
        //     axios
        //     .get('/clientes')
        //     .then( response => (this.clientes = response.data.clientes) )
        // },

        // computed:{
        //     clientesVer(){
        //         if(this.clientes.length){
        //             return this.clientes;
        //         }
        //     }
        // },

        mounted () {
            console.log('Componente'),
            axios
            .get('/clientes')
            .then( response => (this.clientes = response.data.clientes) )
        }
    }
</script>
<style>
 h4{
    background: white;
    color: blueviolet;
    text-align: center
}
ul{
    background: blueviolet;
}
li{
    list-style-type: square;
    background: white;
}
</style>
