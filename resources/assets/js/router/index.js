import Vue from 'vue'
import Router from 'vue-router'
import Dashboard from '../components/Dashboard'
import Example from '../components/Example'
import Login from '../components/auth/Login'
import AuthGuard from './auth-guard'

Vue.use(Router)

export default new Router({
    routes: [
        {
            path: '/admin/dashboard',
            name: 'Dashboard',
            component: Dashboard,
            beforeEnter: AuthGuard
        },
        {
            path: '/admin/example',
            name: 'Example',
            component: Example,
            beforeEnter: AuthGuard
        },
        {
            path: '/admin/login',
            name: 'Login',
            component: Login
        }
    ],
    mode: 'history'
})
