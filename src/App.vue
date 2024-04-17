<script>
import axios from 'axios';

export default {
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
};
</script>

<template>
  <div>
    <div v-for="record in records" :key="record.id">
      <h2>{{ record.title }}</h2>
      <p>{{ record.author }}</p>
    </div>
  </div>
</template>

