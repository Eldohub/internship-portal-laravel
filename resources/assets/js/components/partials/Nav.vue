<template>
  <v-toolbar fixed clipped class="indigo darken-4 hidden-xs-only" dark >
    <v-toolbar-side-icon dark   @click.stop="drawer = !drawer"></v-toolbar-side-icon>
    <v-toolbar-title>
    <router-link class="white--text" to="/admin/dashboard" style="cursor: pointer;"> EldoHub Admin</router-link></v-toolbar-title>
    <v-spacer></v-spacer>
    <v-btn icon>
        <v-icon class="white--text">notifications_none</v-icon>
    </v-btn>
    <v-btn icon>
        <v-icon class="white--text">settings</v-icon>
    </v-btn>
    <v-btn icon>
        <v-icon class="white--text">power_settings_new</v-icon>
    </v-btn>
  </v-toolbar>
</template>

<script>
    export default {
        methods: {
           drawer () {
               console.log('hit')
               const drawerState = this.$store.getters.getDrawer
               this.$store.dispatch('changeDrawer', drawerState)
           }
        }
    }
</script>