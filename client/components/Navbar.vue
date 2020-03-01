<template>
	<nav id="navbar">
    <v-app-bar 
      flat 
      dark
      short
      fixed
      :color="$vuetify.theme.themes.dark.primary"
    >
      <v-container class="navbar-container" fill-height>
        <v-app-bar-nav-icon v-show="$vuetify.breakpoint.smAndDown" @click="drawer = !drawer" />
        <MenuLinks />
        <v-spacer />
        <v-btn outlined rounded>
          Кабинет туриста
          <v-icon right small>fas fa-user</v-icon>
        </v-btn>
      </v-container>
		</v-app-bar>
		<v-navigation-drawer fixed temporary v-model="drawer">asdasd</v-navigation-drawer>
	</nav>
</template>

<script>

import MenuLinks from '~/components/Navigation/PartialMenuLinks.vue';
import { mapGetters } from "vuex";

export default {
	data: () => ({
		appName: process.env.appName,
		drawer: false
	}),
  components: {
    MenuLinks
  },
	computed: mapGetters({
		user: "auth/user"
	}),

	methods: {
		async logout() {
			// Log out the user.
			await this.$store.dispatch("auth/logout");

			// Redirect to login.
			this.$router.push({ name: "login" });
		}
	}
};
</script>

<style lang="scss">
  #navbar {
    .v-toolbar__content {
      display: flex;
      padding: 0 16px;
    }

    .navbar-container {
      padding: 0;
    }
  }
</style>
