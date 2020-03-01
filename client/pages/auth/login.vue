<template>
  <div class="row">
    
  </div>
</template>

<script>
import Form from 'vform'

export default {
  head () {
    return { title: this.$t('login') }
  },

  data: () => ({
    form: new Form({
      email: '',
      password: ''
    }),
    remember: false
  }),

  methods: {
    async login () {
      let data

      // Submit the form.
      try {
        const response = await this.form.post('/login')
        data = response.data
        // Save the token.
        console.log(data.token);
        this.$store.dispatch('auth/saveToken', {
          token: data.token,
          remember: this.remember
        })

      } catch (e) {
        return
      }

      // Fetch the user.
      await this.$store.dispatch('auth/fetchUser')

      // Redirect home.
      this.$router.push({ name: 'home' })
    }
  }
}
</script>
