<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Lista de Clientes</div>

                    <div class="card-body">
                     <ul class = 'list-group'>

                            <h4>Nome</h4>
                            <ul>
                                    <li  :v-for="(info, index) in info" :key="info.nome">
                                       {{index}} - {{info.nome}}

                                    </li>
                            </ul>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data (){
            return {
              info:[{}]
            }
        },

        mounted () {
            axios
            .get('http://127.0.0.1:8000/clientes')
            .then( response => (this.info = response.data.clientes) )
        }
    }
</script>
