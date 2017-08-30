<template>
    <v-app id="example-2" toolbar>

        <v-navigation-drawer permanent dark clipped >
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
                <v-list-tile v-for="item in items" :key="item.title">
                    <v-list-tile-action>
                        <v-icon dark>{{ item.icon }}</v-icon>
                    </v-list-tile-action>
                    <v-list-tile-content>
                        <v-list-tile-title dark dense>{{ item.title }}</v-list-tile-title>
                    </v-list-tile-content>
                </v-list-tile>
            </v-list>
        </v-navigation-drawer>
        <v-toolbar fixed class="indigo" dark darken-4>
            <v-toolbar-side-icon></v-toolbar-side-icon>
            <v-toolbar-title>EldoHub Intern Admin</v-toolbar-title>
            <v-spacer></v-spacer>
            <v-btn icon>
                <v-icon>notifications_none</v-icon>
            </v-btn>
            <v-btn icon>
                <v-icon>settings</v-icon>
            </v-btn>
            <v-btn icon>
                <v-icon>power_settings_new</v-icon>
            </v-btn>
        </v-toolbar>
        <main>
            <v-container fluid>
                <!-- Admin stuff here! -->



            </v-container>
        </main>
    </v-app>
</template>

<script>
    export default {
        data () {
            return {
                items: [
                    { title: 'Dashboard', icon: 'dashboard' },
                    { title: 'Interns', icon: 'supervisor_account' },
                    { title: 'Inbox', icon: 'question_answer' }          
                ],
                mini: false,
                right: null
            }
        }
    }
</script>