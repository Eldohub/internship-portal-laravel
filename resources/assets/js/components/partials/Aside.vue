<template>
  <v-navigation-drawer
          class="pb-0 nav-drawer"
          persistent
          absolute
          height="100%"
          enable-resize-watcher
          v-model="drawer"
          dark>
    <v-list class="pa-1">
      <v-list-tile avatar tag="div">
          <v-list-tile-avatar>
              <img src="https://randomuser.me/api/portraits/men/85.jpg" />
          </v-list-tile-avatar>
          <v-list-tile-content>
              <v-list-tile-title>EldoHub Admin</v-list-tile-title>
          </v-list-tile-content>
          
        </v-list-tile>
    </v-list>

    <v-list class="pt-0" dense>
        <v-divider></v-divider>
        <v-list-tile  class="mt-3" v-for="item in items" :key="item.title" router :to="item.to">
            <v-list-tile-action>
                <v-icon dark>{{ item.icon }}</v-icon>
            </v-list-tile-action>
            <v-list-tile-content>
                <v-list-tile-title dark dense>{{ item.title }}</v-list-tile-title>
            </v-list-tile-content>
        </v-list-tile>
    </v-list>
  </v-navigation-drawer>
</template>

<script>
  export default {
    data () {
      return {
        items: [
          { title: 'Dashboard', icon: 'dashboard', to: '/admin/dashboard'},
          { title: 'Interns', icon: 'supervisor_account', to: '/admin/example' },
          { title: 'Inbox', icon: 'question_answer', to: '/admin/inbox' }          
        ],
        mini: false,
        right: null,
          drawer: this.$store.getters.getDrawer
      }
    }

  }
</script>
<style>
    #e3, #e3 .container {
        min-height: 700px;
        overflow: hidden;
        z-index: 0;
    }

    #e3 .input-group__details:after {
        background-color: rgba(255,255,255,0.32) !important;
    }

    #e3 .input-group--focused .input-group__append-icon {
        color: inherit !important;
    }
    .nav-drawer{
        margin-top: 16px;
    }
</style>