<template>
  <v-container>
    <v-layout row wrap>
      <v-col v-for="i in 29" :key="i" cols="12" sm="4" md="3">
        <v-card>
          <v-card-title>
            Турция
          </v-card-title>
          <v-card-subtitle>Анталия</v-card-subtitle>
          <v-img
            contain
            height="auto"
            src="https://i.ytimg.com/vi/VLId-awp8lI/maxresdefault.jpg" />
          <v-card-text>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi pariatur magni totam odit debitis aperiam vitae quisquam voluptatem cupiditate corporis.
          </v-card-text>
          <v-card-actions>
            <v-btn :color="$vuetify.theme.themes.dark.primary" icon>
              <v-icon small>fas fa-share-alt</v-icon>
            </v-btn>
            <v-btn :color="$vuetify.theme.themes.dark.primary" icon>
              <v-icon small>fas fa-heart</v-icon>
            </v-btn>
            <v-spacer />
            <v-btn :color="$vuetify.theme.themes.dark.primary" icon>
              <v-icon>fas fa-angle-right</v-icon>
            </v-btn>
          </v-card-actions>
        </v-card>
      </v-col>
    </v-layout>
  </v-container>
</template>

<script>
import { mapGetters } from 'vuex'

export default {
  layout: 'default',

  head () {
    return { title: this.$t('home') }
  },

  components: {
    // Navbar
  },

  data: () => ({
    title: process.env.appName
  }),

  computed: mapGetters({
    authenticated: 'auth/check'
  })
}
</script>

<style scoped>
.top-right {
  position: absolute;
  right: 10px;
  top: 18px;
}

.title {
  font-size: 85px;
}

.laravel {
  color: #2e495e;
}

.nuxt {
  color: #00c48d;
}
</style>
