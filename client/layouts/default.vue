<template>
  <v-app>
    <navbar />
    <v-content>
      <welcome-section />
      <nuxt />
    </v-content>
  </v-app>
</template>

<script>
import Navbar from '~/components/Navbar'

export default {
  components: {
    Navbar
  }
}
</script>

<style lang="scss">
  main.v-content {
    margin-top: 56px;
  }
</style>