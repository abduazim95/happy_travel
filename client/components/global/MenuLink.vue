<template>
  <v-btn v-show="$vuetify.breakpoint.mdAndUp" class="menu-link" href="#" :to="to" nuxt text large tile>
    <slot></slot>
  </v-btn>
</template>
<script>
export default {
  name: 'MenuLink',
  props: ['to'],
  data() {
    return {
      
    }
  }
}
</script>

<style lang="scss">
  #menu-links {
    height: 100%;
    .menu-link {
      height: 100%;
    }
  }
</style>