const { createApp } = Vue

createApp({
    data() {
        return {
        records: []
        };
    },
    mounted() {
        // Effettua la chiamata Axios al backend PHP all'avvio del componente
        axios.get('server.php')
        .then(response => {
            this.records = response.data;
            console.log(this.records);
        })
        .catch(error => {
            console.error('Errore durante il recupero dei dati:', error);
        });
    }
})
.mount('#app')