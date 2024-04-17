<script>
import axios from 'axios';

export default {
    name: 'App',
    data() {
        return {
            records: []
        }
    },
    mounted() {
        this.myRequest();
    },
    methods: {
        myRequest() {
            axios.get('server.php')
            .then((response) => {
                this.records = response.data;
                console.log(this.records);
            })
            .catch((error) => {
                console.error('Si è verificato un errore:', error);
            });
        },
    }
}
</script>

<template>
    <!-- Inserisci qui il tuo markup HTML -->
</template>

<style>
    /* Aggiungi qui i tuoi stili CSS */
</style>

