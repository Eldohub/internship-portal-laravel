
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap'); // boootsatrap js

window.Vue = require('vue');

require('vuetify/dist/vuetify.min.css');

import Vuetify from 'vuetify';
import App from './components/App'

Vue.use(Vuetify);


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example', require('./components/Example.vue'));
// Vue.component('app', require('./components/App.vue'));

const app = new Vue({
    el: '#app',
    render: h => h(App)
});
