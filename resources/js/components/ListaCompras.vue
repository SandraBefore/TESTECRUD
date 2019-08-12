<template>
    <div class="container">
        <div >
           <p> I am a example of pingalote..</p>
        </div>
        <button @click="inicio">Inicio</button>
 </div>
</template>

<script>

    export default {
        methods: {
            inicio(){
                this.$router.push('/')
            }
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
