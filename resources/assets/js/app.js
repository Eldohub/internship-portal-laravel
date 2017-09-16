
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap'); // boootsatrap js

window.Vue = require('vue');

require('vuetify/dist/vuetify.min.css');

import Vuetify from 'vuetify'
import VueResource from 'vue-resource'

import Example from './components/Example'

Vue.use(Vuetify);
Vue.use(VueResource);


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example', Example);

const app = new Vue({
    el: '#app',
    created () {
    	console.log('created')
    }
});
