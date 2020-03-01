import Vue from 'vue'
import Vuetify from 'vuetify'
import 'vuetify/dist/vuetify.min.css'
import '@fortawesome/fontawesome-free/css/all.css'

Vue.use(Vuetify)

export default (ctx) => {
  const vuetify = new Vuetify({
    icons: {
      iconfont: 'fa' // default - only for display purposes
    },
    theme: {
      themes: {
        dark: {
          primary: '#00843c',
          secondary: '#66970a',
          accent: '#f0d016',
          hover: '#d8e567',
          error: '#b71c1c'
        }
      }
    }
  })
  ctx.app.vuetify = vuetify
  ctx.$vuetify = vuetify.framework
}
