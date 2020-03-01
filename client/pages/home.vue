<template>
  <div>
    
  </div>
</template>

<script>
import axios from 'axios';

export default {

  head () {
    return { title: this.$t('home') }
  },
  
  created() {
    axios.get('/user').then(resp => {
      console.log(resp.data);
    });
  }
}
</script>
