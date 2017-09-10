import Vue from 'vue'
import Router from 'vue-router'
import Dashboard from '../components/Dashboard'
import Example from '../components/Example'

Vue.use(Router)

export default new Router({
  routes: [
    {
      path: '/admin/dashboard',
      name: 'Dashboard',
      component: Dashboard
    },
    {
      path: '/admin/example',
      name: 'Example',
      component: Example
    }
  ],
  mode: 'history'
})
